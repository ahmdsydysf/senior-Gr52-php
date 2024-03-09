<?php

namespace App\Http\Controllers;

use App\Mail\sendMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSendController extends Controller
{
    public function index()
    {
        $details = [
            'title' => 'mail from ahmed PC',
            'body' => 'this is body from controller details'
        ];

        Mail::to('a.sayed.xc@gmail.com')->send(new sendMailer($details));
    }
}
