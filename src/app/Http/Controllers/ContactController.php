<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['lastName','firstName', 'gender', 'email', 'post', 'address', 'building', 'opinion']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store()
    {
        return view('thanks');
    }
}
