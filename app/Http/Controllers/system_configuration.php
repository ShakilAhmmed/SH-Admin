<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sc;
use Image;
class system_configuration extends Controller
{
    public function index(Request $request)
    {
    	// $obj=new Sc;
    	// $obj->where('id',1)->first()->fill($request->all())->save();

    	// print_r($request->all());
    	$imageName = time().'.'.'png';
    	$upload_path="images/".time().".".'png';
    	echo $upload_path;
    	$image_upload=Image::make($request->system_logo)->resize(300, 300);
        $image_upload->save($upload_path);
        // $request->system_logo->move(public_path('images'), $imageName);
    }

    public function system_crefresh()
    {
    	return Sc::first();
    }
}

