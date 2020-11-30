<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageWebController extends Controller
{
    public function getFile($file_id)
    {
    	$filename = '?';
    	$path = storage_path("app/uploads/{$filename}");
    	
    	if (file_exists($path)) {
    		return response()->file($path, ['Content-Type' => 'image/jpeg']);
    	}
    	
    	abort(404);
    }
}
