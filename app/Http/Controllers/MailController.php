<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Cache; //for read data from Cache

class MailController extends Controller
{
    public function sendMail(){

        /*
        $price=Cache::get('price');
        dd($price);
        */

        $details=[
            'title'=>'Mail From Sameera Khalid Owais for test mail by Laravel 9',
            'body'=>'This mail for testing send mail by Laravel 9'
        ];
        Mail::to('skhowais@hotmail.com')->send(new TestMail($details));

        return 'Email Sent';
    }
}
