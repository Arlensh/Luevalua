<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Centro;
use App\Models\Coment;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;

class CentroController extends Controller{
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }

    // Function to show all centers by calling the DB
    public function index(Request $query){
        // I take all the centers by default, but if I use the input to search, it will search for the word entered in the table name_specifies in ascending order
        return view('centros.index', ['centros' => Centro::name($query->get('cntr'))->orderBy('denominacion_especifica', 'asc')->paginate(1000)]);
    }

    // Function to create the comments
    public function create(Centro $centro){
        return view('centros.create', ['centro' => $centro])->with('status', 'El comentario fue creado con éxito');
    }

    // Function to validate the data that I enter in the centers.create, then I return the view centers.show with the variable center of which I have commented
    public function store(Centro $centro){
        $fields = request()->validate([
            'title' =>'required|max:50',
            'description' => 'required|min:3|max:300',
            'id_centro' => 'required',
            'id_user' => 'required',
            'idUser' => 'required',
        ]);
        Coment::create($fields);
        return redirect()->route('centros.show', compact('centro'));
    }

    // Function that I use to show the page of the center that I have previously selected in centers.index, I pass the variable center and then all the comments
    public function show(Centro $centro){
        $comentarios = Coment::orderBy('id', 'DESC')->get();
        return view('centros.show', ['centro' => $centro], compact('comentarios'));
    }

    // Function to update what is inside the content of the center that is being edited
    public function update(Centro $centro){
        $centro->update(['content' => request('content')]);
        return redirect()->route('centros.show', $centro);
    }

    // Function to go to the page of center.edit, passing it the variable center so that it knows which center is being edited
    public function edit(Centro $centro){
        return view('centros.edit', ['centro' => $centro]);
    }

    // Function to delete the selected comment (it is not implemented yet since I want to implement a complaints system for the future)
    public function destroy($id){
        $comentario = Coment::find($id);
        $comentario->delete();
        return redirect()->route('centros.index');
    }

}
