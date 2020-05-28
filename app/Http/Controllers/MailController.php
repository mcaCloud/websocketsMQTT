<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Mail;
use App\User;

class MailController extends Controller
{
   
    public function newUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        Mail::send('mails.newUser', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
    }
}