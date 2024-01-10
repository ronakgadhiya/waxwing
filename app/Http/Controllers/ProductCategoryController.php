<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\DataTables\ProductCategoryDataTable;
use App\Http\Requests\ProductCategoryRequest;
use Validator;
use Auth;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductCategoryDataTable $dataTable)
    {
        return $dataTable->render('admin.productcategory.index');
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
    public function store(ProductCategoryRequest $request)
    {
        //dd($request->all());
        $validated = $request->validated();
        $validated['created_by'] = Auth::user()->id; 
        $ProductCategory = ProductCategory::create($validated);
        if ($request->file('img')) {
            $imgname=$ProductCategory->id.'_'.time().'.'.$request->img->extension();
            if(move_uploaded_file($request->img->getPathname(),'uplods/productcategory/'. $imgname)){
                ProductCategory::where('id',$ProductCategory->id)->update(['img'=>$imgname]);
            }
        }
        return 'Product Caegory Insert Successful';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCategoryRequest $request, $id)
    {
        $validated = $request->validated();
        $validated['updated_by'] = Auth::user()->id; 
        $ProductCategory = ProductCategory::where('id',$id)->update($validated);
        if ($request->file('img')) {
            $imgname=$id.'_'.time().'.'.$request->img->extension();
            if(move_uploaded_file($request->img->getPathname(),'uplods/productcategory/'. $imgname)){
                ProductCategory::where('id',$id)->update(['img'=>$imgname]);
            }
        }
        return 'Product Caegory Update Successful';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productcategory = ProductCategory::where('id',$id)->update([
            'delete_by' => Auth::user()->id,
        ]);
        $productcategory = ProductCategory::where('id',$id)->delete();

        return response()->json(['success'=>'Recode has been deleted!!!']);
    }
}
