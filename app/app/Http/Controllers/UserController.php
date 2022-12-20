<?php

namespace App\Http\Controllers;

use App\Mail\SubscribedMail;
use App\Mail\WelcomeMail;
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

        if ($request->subscribe) {
            Mail::to($request->email)->send(new SubscribedMail());
        }

        return response()->json(['result' => 'success']);
    }
}
