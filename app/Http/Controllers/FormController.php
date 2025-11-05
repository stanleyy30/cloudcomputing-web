<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitted;

class FormController extends Controller
{
    public function create(){
        return view("form");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'birthdate' => 'required|date', 
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        
        Form::create($validatedData);

        Mail::to($validatedData['email'])->send(new FormSubmitted($validatedData));

        return redirect('/')->with('success', 'Registration successful! Please check your email for confirmation.');
    }
}