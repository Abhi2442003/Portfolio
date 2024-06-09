<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\User;
use Mail;
use App\Mail\SendLoginMail;

class UserController extends Controller
{
    public function showUserWithAddresses($userId=null) {

        return view('particls.first');

        $user = User::find($userId);
        if ($user) {
            // Access the hasMany relationship
            $addresses = $user->addresses;

            // Return the user and their addresses
            return response()->json([
                'user' => $user,
                'addresses' => $addresses
            ]);
        } else {
            // If user not found, return a not found response
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    public function sendLoginMail() {
        $maildata = [
            'name' => 'Abhishek Singh',
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
        ];

        Mail::to('abhi242singh@gmail.com')->send(new SendLoginMail($maildata));

        return response()->json(['message' => 'Mail sent successfully']);
    }
}
