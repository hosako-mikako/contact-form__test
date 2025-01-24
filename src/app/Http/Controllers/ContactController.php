<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)

    {
        $contact = $request->only(['last-name', 'first-name', 'gender', 'email', 'phone-1','phone-2','phone-3', 'address', 'building', 'inquiry-type', 'message',]);
        $contact['category_id'] = $request->input('category_id');
        

        $categories = Category::all();

        return view('confirm', compact('contact', 'categories'));
    }

    public function store(ContactRequest $request) 
    {
        $contact = $request->only(['last-name', 'first-name', 'gender', 'email', 'phone-1','phone-2','phone-3', 'address', 'building', 'inquiry-type', 'message',]);
        $contact['category_id'] = $request->input('category_id');

        Contact::create($contact);


        return view('thanks');

        
    }
}
