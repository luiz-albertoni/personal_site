<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        try{

            $mail['mail']   = $request->get('mail');
            $mail['header'] = "[Albertoni] " .  $request->get('header');
            $mail['body']   =  $request->get('body');

            Mail::send('emails.send', ['mail' => $mail], function ($message)  use ($mail)
            {
                $message->to('luiz.albertoni@gmail.com');
                $message->subject($mail['header']);
                $message->from($mail['mail']);

            });

            return redirect()->route('home')->with('message', 'Mail Sent.');

        } catch (\Exception $message)
        {
            Log::info($message->getMessage());
            Log::info($message->getTraceAsString());
            return redirect()->route('home')->with('error', 'Error to send mail.');

        }
    }

}