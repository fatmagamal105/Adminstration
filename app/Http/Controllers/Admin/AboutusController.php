<?php

namespace App\Http\Controllers\Admin;

use App\Models\Aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutusController extends Controller
{
    public function index()
    {
        $aboutus = Aboutus::all();

    	return view('admin.aboutus')->with('aboutus', $aboutus);
    }
    
    public function store(Request $request){

    	$aboutus = new Aboutus;
    	$aboutus->title = $request->input('title');
       	$aboutus->title = $request->input('subtitle');
     	$aboutus->title = $request->input('description');

		$aboutus->save();

		return redirect('/aboutus')->with('status','Data ADDed Successfully'); 	
   }
   
    public function edit($id)
    {
        $aboutus = Aboutus::findOrFail($id);

        return view('admin.abouts.edit')->with('aboutus',$aboutus);
    }

    
    public function update(Request $request, $id)
    {
        $aboutus = Aboutus::findOrFail($id);
        $aboutus->title = $request->input('title');
        $aboutus->title = $request->input('subtitle');
        $aboutus->title = $request->input('description');
        $aboutus->update();

        return redirect('/aboutus')->with('status','Data Updated Successfully');  

    }

    public function delete($id)
    {
        $aboutus = Aboutus::findOrFail($id);
        $aboutus->delete();

        Session::flash('statuscode','error');
        return redirect('/aboutus')->with('status', 'Data Delete for About us');
    }



}


























