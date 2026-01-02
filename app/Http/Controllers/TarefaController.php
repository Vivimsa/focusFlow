<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Tarefa::all());
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tarefa = Tarefa::create([
            'user_id' => auth()->id(),
            'meta_id' => $request->metaId,
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'concluida_em' => $request->concluidaEm,
            'data_expiracao' => $request->dataExpiracao
        ]);

        return response()->json($tarefa, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa, string $id)
    {
        $metaTarefas = find::
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
