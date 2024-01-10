<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\DataTables\SliderDataTable;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Str;
use Validator;
use Auth;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SliderDataTable $dataTable)
    {
        //
        return $dataTable->render('admin.slider.index');
        

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
    public function store(SliderRequest $request)
    {
        //
        $validated = $request->validated();
        //dd($request->validated());
        $validated['created_by'] = Auth::user()->id; 
        $validated['slug'] = Str::slug($validated['name']); 
        $Slider = Slider::create($validated);
        if ($request->file('img')) {
            $imgname=$Slider->id.'_'.time().'.'.$request->img->extension();
            if(move_uploaded_file($request->img->getPathname(),'uplods/slider/'. $imgname)){
                Slider::where('id',$Slider->id)->update(['img'=>$imgname]);
            }
        }
        return 'Slider Insert Successful';

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
    public function update(SliderRequest $request, $id)
    {
        //
        $validated = $request->validated();
        $validated['updated_by'] = Auth::user()->id; 
        $Slider = Slider::where('id',$id)->update($validated);
        if ($request->file('img')) {
            $imgname=$id.'_'.time().'.'.$request->img->extension();
            if(move_uploaded_file($request->img->getPathname(),'uplods/slider/'. $imgname)){
                Slider::where('id',$id)->update(['img'=>$imgname]);
            }
        }
        return 'Slider Update Successful';
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
        $Slider = Slider::where('id',$id)->update([
            'delete_by' => Auth::user()->id,
        ]);
        $Slider = Slider::where('id',$id)->delete();

        return response()->json(['success'=>'Recode has been deleted!!!']);

    }
}
