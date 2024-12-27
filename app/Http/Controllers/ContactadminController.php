<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactadminController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.index', compact('users'));
    }

}
