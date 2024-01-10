<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\Contact;
use App\Models\Aboutus;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Faq;
use App\Models\BlogCategory;
use App\Models\ProductCategory;
use App\Models\ProductInquiry;
use Illuminate\Pagination\Paginator;
use View;
use Mail;
class ShowController extends Controller
{
    public function index()
    {
       
       

        $Blog=Blog::with(['category'])->where('status',1)->limit(3)->orderBy('id','desc')->get(); ///relationship che 
        $Page=Page::where('status',1)->get();
        $Slider=Slider::where('status',1)->get();
        $faq=Faq::where('status',1)->get();
        $Gallery=Gallery::where('status',1)->get();
        $BlogCategory=BlogCategory::where('status',1)->get();
        $ProductCategory=ProductCategory::where('status',1)->get();
        $Product=Product::where('status',1)->limit(8)->orderBy('id','desc')->get();
        return view('front.index',compact('Product','BlogCategory','Slider','Blog','ProductCategory','Page','Gallery'));
        // return view('front.index'); 
    }

    public function contact()
    {             
        return view('front.contact'); 
    }
    public function faq()
    {       
        $faq=Faq::where('status',1)->get();      
        return view('front.faq',['faq'=>$faq]); 
    }
    
    public function about()
    {         
        $about=Page::where('id',1)->where('status',1)->get()->toArray();
        //dd($about);
        return view('front.about',['about'=>$about]);
    }
    public function blogCat()
    {        
             
            $Blog=Blog::where('status',1)->get();
            return view('front.blog',['Blog'=>$Blog]); 
    }




    public function blogs($slug)
    {             
        if (Blog::where('status',1)->where('slug',$slug)->exists()) {
            $Blog=Blog::with(['category'])->where('status',1)->where('slug',$slug)->get()->toArray();
            return view('front.blog-detail',['Blog'=>$Blog]);
        } else {
            return redirect('/');
        }
         
    }


    public function blog(){
        $Blog=Blog::where('status',1)->get();
        return view('front.blog',['Blog'=>$Blog]);

    }
  
   
    
    public function addcontact(Request $request)
    {
        //dd($request->all());
        $Contact = new Contact();
        $Contact->name = $request->name;
        $Contact->number = $request->number;
        $Contact->email = $request->email;
        $Contact->subject = $request->subject;
        $Contact->massage = addslashes($request->massage);
        $Contact->save();
        
        return redirect('/contact')->with('success','Contact Add Successfully') ;
        
   
    }
    public function product($id)
    {    
        if (ProductCategory::where('id',$id)->exists()) {
            $Product=Product::where('status',1)->where('product_id',$id)->paginate('12');
            return view('front.shopcategory',['Product'=>$Product]);
        } else {
            return redirect('/');
        }           
    }


    public function shop(){ 
        $Shopcat = ProductCategory::where('status',1)->paginate('12');
        return view('front.shop',['Shopcat'=>$Shopcat]);

    }



    public function productDetail($slug)
    {      
        //dd('dsvvx');       
        if (Product::where('slug',$slug)->exists()) {
            $Product=Product::with(['productCategory'])->where('status',1)->where('slug',$slug)->get();
            $bproduct=Product::where('status',1)->where('slug','!=',$slug)->limit(3)->orderBy('id','desc')->get();
            
            return view('front.product-details',['Product'=>$Product,'bproduct'=>$bproduct]);
        } else {
            return redirect('/');
        } 


        
    }
    public function addInquiry(Request $request)
    {
        //dd($request->all());
        $ProductInquiry = new ProductInquiry();
        $ProductInquiry->product_id = $request->product_id;
        $ProductInquiry->name = $request->name;
        $ProductInquiry->mobile = $request->mobile;
        $ProductInquiry->email = $request->email;
        $ProductInquiry->message = addslashes($request->message);
        $ProductInquiry->save();
        
        //mail 

        $arrayEmails = ['gadhiyaronak3@gmmail.com'];
        $emailSubject = 'Inquiry';
        $emailBody = '<h2>New Inquiry</h2>
        <table border="1" align="left" cellspacing="0" cellpadding="5">
            <tr align="left">
                <th>Name</th>
                <td>'.$ProductInquiry->name.'</td>
            </tr>
            <tr align="left">
                <th>Mobile Number</th>
                <td>'.$ProductInquiry->mobile.'</td>
            </tr>
            <tr align="left">
                <th>Email</th>
                <td>'.$ProductInquiry->email.'</td>
            </tr>
        </table>';
        
        Mail::send('emails.normal',
            ['msg' => $emailBody],
            function($message) use ($arrayEmails, $emailSubject) {
                $message->to($arrayEmails)
                ->subject($emailSubject);
            }
        );
        //mail end

        return redirect()->back();
   
    }

    
}
