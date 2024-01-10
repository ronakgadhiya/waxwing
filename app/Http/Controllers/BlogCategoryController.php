<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\DataTables\BlogCategoryDataTable;
use App\Http\Requests\BlogCategoryRequest;
use Validator;
use Auth;

class BlogCategoryController extends Controller
{
    public function index(BlogCategoryDataTable $dataTable)
    {
        return $dataTable->render('admin.blogcategory.index');
    }

    public function create()
    {
        //
    }

    public function store(BlogCategoryRequest $request)
    {

        $validated = $request->validated();
        $validated['created_by'] = Auth::user()->id; 
        $BlogCategory = BlogCategory::create($validated);

        return 'Blog Category Insert Successful';
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(BlogCategoryRequest $request, $id)
    {
        $validated = $request->validated();
        $validated['updated_by'] = Auth::user()->id; 
        $BlogCategory = BlogCategory::where('id',$id)->update($validated);

        return 'Blog Category Update Successful';
    }

    public function destroy($id)
    {
        $blogcategory = BlogCategory::where('id',$id)->update([
            'delete_by' => Auth::user()->id,
        ]);
        $blogcategory = BlogCategory::where('id',$id)->delete();

        return response()->json(['success'=>'Recode has been deleted!!!']);
    }
    
}
