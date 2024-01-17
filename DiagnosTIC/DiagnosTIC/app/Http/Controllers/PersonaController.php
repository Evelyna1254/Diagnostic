<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class PersonaController
 * @package App\Http\Controllers
 */
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tipo)
    {
        //$personas = Persona::paginate();

        $personas = DB::table('personas')
        ->where('tipo_persona', $tipo)
        ->paginate();

        return view('persona.index', compact('personas'), [ 'tipo' => $tipo ])
            ->with('i', (request()->input('page', 1) - 1) * $personas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($tipo)
    {
        $persona = new Persona();
        $persona->tipo_persona = $tipo;
        return view('persona.create', compact('persona'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Persona::$rules);

        $persona = Persona::create($request->all());

        // return redirect()->route('persona.index',['tipo' => $persona->tipo_persona])
        //     ->with('success', 'Persona created successfully.');

        return redirect('persona/index/'.$persona->tipo_persona);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);

        return view('persona.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::find($id);

        return view('persona.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Persona $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        request()->validate(Persona::$rules);

        $persona->update($request->all());

        // return redirect()->route('persona.index')
        //     ->with('success', 'Persona updated successfully');

        return redirect('persona/index/'.$persona->tipo_persona);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $persona_consulta = Persona::find($id);
        $persona = Persona::find($id)->delete();

        // return redirect()->route('persona.index')
        //     ->with('success', 'Persona deleted successfully');
        return redirect('persona/index/'.$persona_consulta->tipo_persona);
    }

    public function ConsultarProfesionales()
    {
        $pacientes = Persona::where('tipo_persona', '=',1)->get();
        return Response()->json($pacientes, 200);
    }

    public function ConsultarPacientes()
    {
        $pacientes = Persona::where('tipo_persona', '=',2)->get();
        return Response()->json($pacientes, 200);
    }
}
