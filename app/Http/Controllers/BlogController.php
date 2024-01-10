<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\DataTables\BlogDataTable;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Str;
use Validator;
use Auth;

class BlogController extends Controller
{
    public function index(BlogDataTable $dataTable)
    {
        $BlogCategory=BlogCategory::where('status',1)->pluck('name','id')->toArray();
        return $dataTable->render('admin.blog.index',['BlogCategory'=>$BlogCategory]);
    }

    public function create()
    {
        //
    }

    public function store(BlogRequest $request)
    {
        $validated = $request->validated();
        $validated['created_by'] = Auth::user()->id; 
        $validated['slug'] = Str::slug($validated['name']); 
        $Blog = Blog::create($validated);
        //dd($Blog);
        if ($request->file('img')) {
            $imgname=$Blog->id.'_'.time().'.'.$request->img->extension();
            if(move_uploaded_file($request->img->getPathname(),'uplods/blog/'. $imgname)){
                Blog::where('id',$Blog->id)->update(['img'=>$imgname]);
            }
        }
        return 'Blog Insert Successful';
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(BlogRequest $request, $id)
    {
        $validated = $request->validated();
        $validated['updated_by'] = Auth::user()->id; 
        $validated['slug'] = Str::slug($validated['name']); 
        $Blog = Blog::where('id',$id)->update($validated);
        if ($request->file('img')) {
            $imgname=$id.'_'.time().'.'.$request->img->extension();
            if(move_uploaded_file($request->img->getPathname(),'uplods/blog/'. $imgname)){
                Blog::where('id',$id)->update(['img'=>$imgname]);
            }
        }
        return 'Blog Update Successful';
    }

    public function destroy($id)
    {
        $Blog = Blog::where('id',$id)->update([
            'delete_by' => Auth::user()->id,
        ]);
        $Blog = Blog::where('id',$id)->delete();

        return response()->json(['success'=>'Recode has been deleted!!!']);
    }
}
