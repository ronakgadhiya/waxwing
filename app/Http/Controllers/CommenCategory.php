<?php

namespace App\Http\Controllers;
use App\Models\BlogCategory;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Faq;
use App\Models\Slider;
use App\Models\ProductCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class CommenCategory extends Controller
{
    public function getblogcategoryById( $id )
    {
        $data = BlogCategory::where('id',$id)->get();
        return response()->json($data);
    }


    public function getblogById( $id )
    {
        $data = Blog::where('id',$id)->get();
        return response()->json($data);
    }
    public function getpageById( $id )
    {
        $data = Page::where('id',$id)->get();
        return response()->json($data);
    }
    public function getfaqById( $id )
    {
        $data = Faq::where('id',$id)->get();
        return response()->json($data);
    }
    public function getsliderById( $id )
    {
        $data = Slider::where('id',$id)->get();
        return response()->json($data);
    }
   

    public function getProductCategoryById( $id )
    {
        $data = ProductCategory::where('id',$id)->get();
        return response()->json($data);
    }

    public function getProductById( $id )
    {
        $data = Product::where('id',$id)->get();
        return response()->json($data);
    }

    public function DeleteImage($id,$model,$field)
    {
        $model_name = '\App\Models\\'.$model;
        $data = $model_name::where('id',$id)->update([
            $field => null,
        ]);
        return response()->json(['success'=>'Image has been deleted!!!']);
    }

    public function changeStatus(Request $request)
    {
        $model_name = '\App\Models\\'.$request->modal;
        $data = $model_name::where('id',$request->id)->update(['status' => $request->status]);
        return response()->json(['success'=>'Status changed successfully.']);
    }
}
