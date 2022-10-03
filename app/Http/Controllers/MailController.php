<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        $name = 'Seffu';

        Mail::to('fake@email.com')->send(new SignUp($name));
        return view('welcome');
    }
    //
}
