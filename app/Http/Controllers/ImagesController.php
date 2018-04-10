<?php

namespace App\Http\Controllers;
use Image;
use Illuminate\Http\Request;

use App\Http\Requests;

class ImagesController extends Controller
{
    //
    public function show($imageName,$width=null,$height=null)
    {
    	$imagePath = storage_path('app/images/uploads/'.$imageName);
    	$image=Image::make($imagePath);
    	if($width){
    		$image->resize($width, $height);
    	}
    	return $image->response();	
    	// return response()->download($imagePath, null, [], null);
	}
}
