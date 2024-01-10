<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\DataTables\ProductDataTable;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Str;
use Validator;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductDataTable $dataTable)
    {
        $ProductCategory=ProductCategory::where('status',1)->pluck('name','id')->toArray();
        return $dataTable->render('admin.product.index',['ProductCategory'=>$ProductCategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $validated = $request->validated();
        //dd($request->validated());
        $validated['created_by'] = Auth::user()->id; 
        $validated['slug'] = Str::slug($validated['name']); 
        $Product = Product::create($validated);
        if ($request->file('img')) {
            $imgname=$Product->id.'_'.time().'.'.$request->img->extension();
            if(move_uploaded_file($request->img->getPathname(),'uplods/product/'. $imgname)){
                Product::where('id',$Product->id)->update(['img'=>$imgname]);
            }
        }
        return 'Product Insert Successful';
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $validated = $request->validated();
        $validated['updated_by'] = Auth::user()->id; 
        $validated['slug'] = Str::slug($validated['name']); 
        $Product = Product::where('id',$id)->update($validated);
        if ($request->file('img')) {
            $imgname=$id.'_'.time().'.'.$request->img->extension();
            if(move_uploaded_file($request->img->getPathname(),'uplods/product/'. $imgname)){
                Product::where('id',$id)->update(['img'=>$imgname]);
            }
        }
        return 'Product Update Successful';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product = Product::where('id',$id)->update([
            'delete_by' => Auth::user()->id,
        ]);
        $Product = Product::where('id',$id)->delete();

        return response()->json(['success'=>'Recode has been deleted!!!']);
    }
}
