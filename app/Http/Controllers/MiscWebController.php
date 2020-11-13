<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactForm;

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

    public function getContactFormConfirmation()
    {
    	return view('contact-form-confirmation');
    }

    public function postContactForm(Request $request)
    {
    	$form = ContactForm::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'message' => $request->message,
    	]);

    	// Need to actually send the email

    	return redirect()->to('/contact-form-confirmation');
    }
}
