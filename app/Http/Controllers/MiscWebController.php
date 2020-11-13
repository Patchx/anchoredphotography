<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiscWebController extends Controller
{
    public function getIndex()
    {
		return view('welcome');
    }

    public function get1()
    {
    	return view('home-page');
    }

    public function postContactForm(Request $request)
    {
    	dd($request->all());
    }
}
