<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() 
    {
        $project = project::all();
        return view('project', compact('project'));
    }
}
