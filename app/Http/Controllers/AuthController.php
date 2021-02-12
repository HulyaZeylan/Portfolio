<?php

namespace App\Http\Controllers;

use App\Mail\AdminInfoMail;
use App\Mail\UserRegisterMail;

use App\Models\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function contactMe(Request $request)
    {


        if ($request->isMethod('post')) {

            $this->validate(request(), [
                'firstName' => 'required|min:2|max:50',
                'lastName' => 'required|min:2|max:50',
                'email' => 'required|email|unique:users',
            ]);

            $contact = ContactMe::create([
                'firstName' => Str::of($request->firstName )->title()->trim(),
                'lastName' => Str::of($request->lastName )->title()->trim(),
                        'phone' => $request->phone,
                'email' => trim($request->email),
                'status' => 0
            ]);


            Mail::to($request->email)->send(new UserRegisterMail($contact));
            Mail::to($request->email)->send(new AdminInfoMail($contact));

            // auth()->login($user);

            return redirect()->route('portfolio');
        }
        return view('front.auth.contact');
    }

}
