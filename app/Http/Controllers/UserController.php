<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\MailingList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Mail::to($request->email)->send(new WelcomeMail());

        MailingList::create([
            'email' => $request->email
        ]);

        return response()->json(['result' => 'success']);
    }
}
