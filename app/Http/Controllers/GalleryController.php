<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Validator;
use Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Gallery = Gallery::all();
        return view('admin.gallery.index',['gallery'=>$Gallery]);
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
    public function store(Request $request)
    {
        if ($request->file('img')) {
            
            $Gallery = new Gallery();
            $Gallery->created_by = Auth::user()->id;
            $Gallery->save();

            $imgname=$Gallery->id.'_'.time().'.'.$request->img->extension();
            if(move_uploaded_file($request->img->getPathname(),'uplods/gallery/'. $imgname)){
                Gallery::where('id',$Gallery->id)->update(['img'=>$imgname]);
            }

            $data=Gallery::where('id',$Gallery->id)->get()->toArray();
            return response()->json($data);
        } else {
            return '0';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Gallery = Gallery::where('id',$id)->delete();
        return response()->json(['success'=>'Recode has been deleted!!!']);
    }
}
