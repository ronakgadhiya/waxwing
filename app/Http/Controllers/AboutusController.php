<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Aboutus;
use Auth;

class AboutusController extends Controller
{
    public function index()
    {
        $Aboutus = Aboutus::first();
        return view('admin.about.index',['Aboutus'=>$Aboutus]);
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
        $Aboutus = Aboutus::get()->toArray();
        if (sizeof($Aboutus) >0) {
            $validated = $request->all();
            unset($validated['_token']);
            Aboutus::where('id',$Aboutus[0]['id'])->update($validated);
            if ($request->file('img')) {
                $imgname='1_'.time().'.'.$request->img->extension();
                if(move_uploaded_file($request->img->getPathname(),'uplods/about/'. $imgname)){
                    Aboutus::where('id',$Aboutus[0]['id'])->update(['img'=>$imgname]);
                }
            }
            if ($request->file('img1')) {
                $imgname='2_'.time().'.'.$request->img1->extension();
                if(move_uploaded_file($request->img1->getPathname(),'uplods/about/'. $imgname)){
                    Aboutus::where('id',$Aboutus[0]['id'])->update(['img1'=>$imgname]);
                }
            }
            return redirect()->route('aboutus.index')->with('success','Change Successfully');
        } else {
            $validated = $request->all(); 
            $Aboutus = Aboutus::create($validated);
            if ($request->file('img')) {
                $imgname=$Aboutus->id.'_'.time().'.'.$request->img->extension();
                if(move_uploaded_file($request->img->getPathname(),'uplods/about/'. $imgname)){
                    Aboutus::where('id',$Aboutus->id)->update(['img'=>$imgname]);
                }
            }
            if ($request->file('img1')) {
                $imgname=$Aboutus->id.'_'.time().'.'.$request->img1->extension();
                if(move_uploaded_file($request->img1->getPathname(),'uplods/about/'. $imgname)){
                    Aboutus::where('id',$Aboutus->id)->update(['img1'=>$imgname]);
                }
            }
            return redirect()->route('aboutus.index')->with('success','Change Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutus $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutus $aboutus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutus $aboutus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutus $aboutus)
    {
        //
    }
}
