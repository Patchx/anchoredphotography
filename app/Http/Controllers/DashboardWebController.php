<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class DashboardWebController extends Controller
{
    public function getDashboard()
    {
    	$user = Auth::user();

    	if ($user === null || $user->role === 'client') {
    		return view('client-dashboard');
    	}

    	if ($user->role === 'admin') {
    		return view('admin-dashboard');
    	}

    	abort(500);
    }
}
