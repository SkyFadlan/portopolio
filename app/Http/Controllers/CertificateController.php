<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    public function index()
    {
        $certificate = Certificate::all();
        return view('certificate',compact('certificate'));
    }
}