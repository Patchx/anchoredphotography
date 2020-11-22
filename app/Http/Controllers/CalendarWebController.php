<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarWebController extends Controller
{
    public function getTest()
    {
    	return view('calendar.calendar-test');
    }
}
