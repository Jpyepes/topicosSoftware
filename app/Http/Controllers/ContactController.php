<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $data1 = 'Contact us - Online Store';
        $data2 = 'Contact us';
        $email = 'Email: jpyg123@gmail.com';
        $address = 'Address: Cl. 37 Sur #27 90';
        $phone_number = 'Phone Number: 3165324583';

        return view('home.contact')->with('title', $data1)
          ->with('subtitle', $data2)
          ->with('email', $email)
          ->with('address', $address)
          ->with('phone_number', $phone_number);
    }
}
