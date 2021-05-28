<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Centro;
use App\Models\Coment;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;

class CentroController extends Controller
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

        // $centros = Centro::denominacion_especifica($centro->get('denominacion_especifica'))->orderBy('id_auto', 'asc')->paginate(20);
        // return view('centros.index', compact('centros'));
        return view('centros.index', [
            'centros' => Centro::name($query->get('cntr'))->orderBy('denominacion_especifica', 'asc')->paginate(4000)
        ]);


        // return view('centros.index', [
        //     'centros' => Centro::orderBy('id_auto', 'asc')->paginate(20)
        // ]);
    }







    public function create(Centro $centro)
    {
        // return view('centros.create', [
        //     'centro' => new Centro
        // ]);

        // return $centro;
            // return view('comen
            return view('centros.create', [
                'centro' => $centro
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */





    public function store(Centro $centro)
    {
        //metodo mas eficiente:
        //guardo la variable fields el json que me devuelve el formulario, con la funcion validate hago que solo se validen los atributos que yo escoja.
        //todo esto para que no se modifiquen atributos que no queremos como el "approved" o la "id"

        // Centro::create($request->validated());

        // return redirect()->route('centros.index')->with('status', 'El proyecto fue creado con éxito');


// return request();

    Coment::create([
        'title' => request('title'),
        'description' => request('title'),
        'id_user' => request('id_user'),
        'id_centro' => request('id_centro'),

    ]);

    // return redirect()->route('centros.show')->with('status', 'El proyecto fue creado con éxito');
    $comentarios = Coment::all();

    return view('centros.show',compact('centro','comentarios')) ;
    // return redirect()->route('centros.index');

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    public function show(Centro $centro)
    {

        // return Centro::find($centro);

        $comentarios = Coment::all();
        //  $comentarios = Coment::where('id_centro', $centro->codigo);

        return view('centros.show', [
            'centro' => $centro,
        ], compact('comentarios'));

        // return view('centros.show', [
        //     'centro' => $centro,
        //     'comentarios' => Coment::where('id_centro', 3013297),
        // ]);

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
        $centro->update([
            'content' => request('content'),
        ]);

        return redirect()->route('centros.show', $centro);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */






    public function destroy(Centro $centro)
    {
        // $centro->delete();
        return redirect()->route('centros.index')->with('status', 'El proyecto fue eliminado con éxito');
    }







    public function edit(Centro $centro)
    {
        return view('centros.edit', [
            'centro' => $centro
        ]);
    }
}
