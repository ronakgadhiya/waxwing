<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Page;
use App\DataTables\PageDataTable;
use App\Http\Requests\PageRequest;
use Illuminate\Support\Str;
use Validator;
use Auth;


class PageController extends Controller
{
    //
    public function index(PageDataTable $dataTable)
    {
        
        return $dataTable->render('admin.page.index');
    }

    public function create()
    {
        //
    }

    public function store(PageRequest $request)
    {
        $validated = $request->validated();
        $validated['created_by'] = Auth::user()->id; 
        $validated['slug'] = Str::slug($validated['name']); 
        $Page = Page::create($validated);
        //dd($Page);
        if ($request->file('img')) {
            $imgname=$Page->id.'_'.time().'.'.$request->img->extension();
            if(move_uploaded_file($request->img->getPathname(),'uplods/page/'. $imgname)){
                Page::where('id',$Page->id)->update(['img'=>$imgname]);
            }
        }
        return 'Page Insert Successful';
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(PageRequest $request, $id)
    {
        $validated = $request->validated();
        $validated['updated_by'] = Auth::user()->id; 
        $validated['slug'] = Str::slug($validated['name']); 
        $Page = Page::where('id',$id)->update($validated);
        if ($request->file('img')) {
            $imgname=$id.'_'.time().'.'.$request->img->extension();
            if(move_uploaded_file($request->img->getPathname(),'uplods/page/'. $imgname)){
                Page::where('id',$id)->update(['img'=>$imgname]);
            }
        }
        return 'Page Update Successful';
    }

    public function destroy($id)
    {
        $Page = Page::where('id',$id)->update([
            'delete_by' => Auth::user()->id,
        ]);
        $Page = Page::where('id',$id)->delete();

        return response()->json(['success'=>'Recode has been deleted!!!']);
    }

}
