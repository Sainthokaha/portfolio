<?php

namespace App\Http\Controllers;
use App\Http\Resources\SkillResource;
use App\Http\Resources\ProjectResource;
use App\Models\Skill;
use App\Models\Project;
use Inertia\Inertia;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $skills = SkillResource::collection(Skill::all());
        $projects = ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Welcome', compact('skills', 'projects'));
    }
}
