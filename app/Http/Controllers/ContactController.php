<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() 
    {
        $contact = contact::all();
        return view('contact', compact('contact'));
    }
}
