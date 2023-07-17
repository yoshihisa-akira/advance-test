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
        $contact = $request->only(['fullName', 'lastName', 'firstName', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        $contact['fullName'] = $contact['lastName'] . $contact['firstName'];
        return view('confirm', ['contact' => $contact]);
    }

    public function store(Request $request)
    {
        $contact = $request->only(['fullName', 'lastName', 'firstName', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        return view('thanks');
    }

    public function fix()
    {
        return view('index');
    }
}
