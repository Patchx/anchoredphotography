<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Mail\SendContactFormEmail;

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
        $contact_form_email = new SendContactFormEmail([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

    	Mail::to('anchoredphotographyFL@gmail.com')
                ->bcc('robert.anderson.fl@gmail.com')
                ->send($contact_form_email);

    	return redirect()->to('/contact-form-confirmation');
    }
}
