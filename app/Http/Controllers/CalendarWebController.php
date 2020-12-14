<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarWebController extends Controller
{
	public function getSchedule()
	{
		return view('calendar.schedule');
	}

    public function getTest()
    {
    	return view('calendar.calendar-test');
    }
}
