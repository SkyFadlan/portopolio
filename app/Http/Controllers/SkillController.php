<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index() 
    {
        $skill = skill::all();
        return view('skill', compact('skill'));
    }
}
