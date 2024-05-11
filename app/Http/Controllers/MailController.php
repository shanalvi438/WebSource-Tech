<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Emailsend;

use App\Models\mails;

class MailController extends Controller
{
    public function index()
    {
            return view('sendEmail');
    }

    // public function SendMail()
    // {

    //     $user->email= $reuest->email;
    //     // $user = 'info@websourcetech.com';
    //     Mail::to($user)
    //     ->send(new Emailsend);
    //     return view('sendEmail');

    // }

    public function store(Request $request)
    {
        $mail = new mails;
        $mail->email = $request->email;
        // echo "<pre>";
        // print_r($mail);
        // die;
        // // $user = 'info@websourcetech.com';
        Mail::to($mail)

        ->send(new Emailsend);
        $mail->save();

        return redirect()->route('web.contact')->with('send','Your Email has been subscribed');
    }
}
