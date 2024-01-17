<?php

namespace App\Http\Controllers;

use App\Models\Antecedente;
use Illuminate\Http\Request;

/**
 * Class AntecedenteController
 * @package App\Http\Controllers
 */
class AntecedenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $antecedentes = Antecedente::paginate();

        return view('antecedente.index', compact('antecedentes'))
            ->with('i', (request()->input('page', 1) - 1) * $antecedentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $antecedente = new Antecedente();
        return view('antecedente.create', compact('antecedente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Antecedente::$rules);

        $antecedente = Antecedente::create($request->all());

        return redirect()->route('antecedente.index')
            ->with('success', 'Antecedente creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $antecedente = Antecedente::find($id);

        return view('antecedente.show', compact('antecedente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $antecedente = Antecedente::find($id);

        return view('antecedente.edit', compact('antecedente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Antecedente $antecedente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Antecedente $antecedente)
    {
        request()->validate(Antecedente::$rules);

        $antecedente->update($request->all());

        return redirect()->route('antecedente.index')
            ->with('success', 'Antecedente editado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $antecedente = Antecedente::find($id)->delete();

        return redirect()->route('antecedente.index')
            ->with('success', 'Antecedente eliminado exitosamente');
    }

    public function ConsultarAntecedentes()
    {
        $antecedente = Antecedente::get();
        return Response()->json($antecedente, 200);
    }
}
