<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Centro;
use App\Models\Coment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;

class ComentarioController extends Controller
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
    public function index(Request $query)
    {
        // $comentarios = [
        //     ['title' => 'Comentario1'],
        //     ['title' => 'Comentario2'],
        //     ['title' => 'Comentario3'],
        //     ['title' => 'Comentario4'],
        // ];

        // return view('centros.comentarios', compact('comentarios'));

        return view('comentarios.index', [
            'comentarios' => Coment::orderBy('created_at', 'asc')->paginate(100)
        ]);
    }

    // public function create(Centro $centro){
    //     return $centro;
    //         // return view('comen
    //         return view('comentarios.create', [
    //             'centro' => $centro
    //         ]);
    //     }


//     public function store(){
//         $title = request('title');

//         Coment::create([
//             'title' => $title,

//     ]);

// }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Coment $comentario)
    {
        return $comentario;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Centro $centro, SaveProjectRequest $request)
    // {
    //     $centro->update($request->validated());
    //     return redirect()->route('centros.show', $centro)->with('status', 'El proyecto fue actualizado con éxito');
    // }
    public function update(Centro $centro)
    {
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centro $centro)
    {
    }

    public function edit(Centro $centro)
    {
    }
}
