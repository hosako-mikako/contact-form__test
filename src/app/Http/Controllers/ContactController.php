<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request) 
    {
        $contact = $request->only(['last-name', 'first-name', 'gender', 'email', 'phone-1','phone-2','phone-3', 'address', 'building', 'inquiry-type', 'message',]);

        return view('confirm', compact('contact'));
    }

    public function store(Request $request) 
    {
        $contact = $request->only(['last-name', 'first-name', 'gender', 'email', 'phone-1','phone-2','phone-3', 'address', 'building', 'inquiry-type', 'message',]);
    }
}
