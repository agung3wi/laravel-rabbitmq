<?php

namespace App\Http\Controllers;

use App\Mail\SendMailTemplate;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $email = request("email");
        Mail::to($email)->send(new SendMailTemplate("Halo"));
    }

    public function sendEmailQueue()
    {
        $email = request("email");
        Mail::to($email)->queue(new SendMailTemplate("Halo"));
    }
}
