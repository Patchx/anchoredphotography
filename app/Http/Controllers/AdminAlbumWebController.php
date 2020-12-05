<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AdminAlbumWebController extends Controller
{
    public function postAlbumSearch(Request $request)
    {
    	$user = Auth::user();

		if ($user === null || $user->role !== 'admin') {
			abort(404);
		}

		if ($request->search_text === null) {
			return redirect()->back()->with(
				'search_text_failure', "Search text cannot be blank"
			);
		}

		dd('Work in progress');
    }
}
