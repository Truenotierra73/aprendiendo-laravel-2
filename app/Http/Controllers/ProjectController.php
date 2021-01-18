<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index(Request $request)
    {
        $projects = Project::orderBy('created_at', 'DESC')->paginate(3);

        return view('projects.index-project', compact('projects'));
    }

    /**
     * Muestra un sólo elemento. Utilización de Route Model Binding.
     */
    public function show(Project $project)
    {
        // $project = Project::findOrFail($id); --> Método normal con Eloquent

        return view('projects.show-project', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create-project', [
            'project' => new Project
        ]);
    }

    public function store()
    {
        // $title = request('title');
        // $description = request('description');

        // Project::create([
        //     'title' => $title,
        //     'description' => $description
        // ]);

        $fields = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Project::create($fields); // ['title', 'description']

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit-project', [
            'project' => $project
        ]);
    }

    public function update(Project $project)
    {
        $fields = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $project->update($fields);

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito.');
    }
}
