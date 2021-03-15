<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Mail\SendContactFormEmail;

class MiscWebController extends Controller
{
    public function getIndex()
    {
        $top_image_urls = [
            'https://res.cloudinary.com/lessondb/image/upload/q_auto,g_auto/v1615759807/anchoredphotographyfl/family_1.jpg',
            'https://res.cloudinary.com/lessondb/image/upload/q_auto,g_auto/v1615759785/anchoredphotographyfl/wedding_1.jpg',
            'https://res.cloudinary.com/lessondb/image/upload/q_auto,g_auto/v1615759769/anchoredphotographyfl/family_3.jpg',
            'https://res.cloudinary.com/lessondb/image/upload/q_auto,g_auto/v1615768165/anchoredphotographyfl/maternity_1.jpg',
        ];

        $bottom_image_urls = [
            'https://res.cloudinary.com/lessondb/image/upload/q_auto,g_auto/v1615768144/anchoredphotographyfl/kids_1.jpg',
            'https://res.cloudinary.com/lessondb/image/upload/q_auto,g_auto/v1615767833/anchoredphotographyfl/couple_1.jpg',
            'https://res.cloudinary.com/lessondb/image/upload/q_auto,g_auto/v1615759785/anchoredphotographyfl/family_2.jpg',
            'https://res.cloudinary.com/lessondb/image/upload/q_auto,g_auto/v1615759827/anchoredphotographyfl/ring_1.jpg',
        ];

        $data = [
            'top_image_urls' => $top_image_urls,
            'bottom_image_urls' => $bottom_image_urls,
        ];

        return view('home-page', $data);
    }

    public function getAbout()
    {
        return view('about');
    }

    public function getContact()
    {
        return view('contact');
    }

    public function getContactConfirmation()
    {
    	return view('contact-confirmation');
    }

    public function postContact(Request $request)
    {        
        $contact_form_email = new SendContactFormEmail([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

    	Mail::to('anchoredphotographyFL@gmail.com')
                ->bcc('robert.anderson.fl@gmail.com')
                ->send($contact_form_email);

    	return redirect()->to('/contact-confirmation');
    }
}
