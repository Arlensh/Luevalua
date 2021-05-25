<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ProjectController extends Controller
{

    public function __construct()
    {
        // Only seria para los que queremos que los autentifique
        // $this->middleware('auth')->only('create', 'edit');
        // Except para lo contrario, como hay menos, es mejor usar este
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $portfolio = [
        //     ['title' => 'Proyecto #1'],
        //     ['title' => 'Proyecto #2'],
        //     ['title' => 'Proyecto #3'],
        //     ['title' => 'Proyecto #4'],
        //     ['title' => 'Proyecto #5'],
        // ];

        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        //metodo mas eficiente:
        //guardo la variable fields el json que me devuelve el formulario, con la funcion validate hago que solo se validen los atributos que yo escoja.
        //todo esto para que no se modifiquen atributos que no queremos como el "approved" o la "id"

        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

        // return $id;

        return view('projects.show', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());
        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }
}
