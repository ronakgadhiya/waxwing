<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\FaqCategory;
use App\DataTables\FaqDataTable;
use App\Http\Requests\FaqRequest;
use Illuminate\Support\Str;
use Validator;
use Auth;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FaqDataTable $dataTable)
    {
        
        return $dataTable->render('admin.faq.index');
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
    public function store(FaqRequest $request)
    {
        //
        $validated = $request->validated();
        $validated['created_by'] = Auth::user()->id; 
        $validated['slug'] = Str::slug($validated['name']); 
        $faq = Faq::create($validated);
    
        return 'Faq Insert Successful';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqRequest $request, $id)
    {
        //
       
        $validated = $request->validated();
        $validated['updated_by'] = Auth::user()->id; 
        $faq = Faq::where('id',$id)->update($validated);

        return 'Faq Update Successful';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $faq = Faq::where('id',$id)->update([
            'delete_by' => Auth::user()->id,
        ]);
        $faq = Faq::where('id',$id)->delete();

        return response()->json(['success'=>'Recode has been deleted!!!']);
    }
}
