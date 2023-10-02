<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail as FacadesMail;

class TestController extends Controller
{
    public function index()
    {

        $subject = 'Test Subject';
        $body = 'Test Message';
        Mail::to('abdoullahbalde@gmail.com')->send(new TestMail($subject, $body));
    }
}
