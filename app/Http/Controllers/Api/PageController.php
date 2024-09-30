<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;



class PageController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->with('type', 'technologies')->get();
        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function allTechnologies()
    {
        $technologies = Technology::all();
        return response()->json([
            'success' => true,
            'results' => $technologies
        ]);
    }

    public function allType()
    {
        $types = Type::all();
        return response()->json([
            'success' => true,
            'results' => $types
        ]);
    }
}
