<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('index',[
            'projects'=>$projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nume' => 'required',
            'descriere' => 'required',
            'stare'=>'required',
            'start_date'=>'required'
        ]);

        $project = new Project();
        $project->nume = $request->nume;
        $project->descriere = $request->descriere;

        $project->stare = $request->stare;
        $project->start_date = $request->start_date;
        $project->save();

        Project::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project): View
    {
        return view('show',['project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('edit',['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project->nume = $request->nume;
        $project->descriere = $request->descriere;
        $project->stare = $request->stare;
        $project->start_date = $request->start_date;
        $project->save();
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->back();
    }
}
