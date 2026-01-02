<?php

namespace App\Http\Controllers;

use App\Enums\StatusTarefa;
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
            'meta_id' => $request->meta_Id,
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
    public function show(string $id)
    {
        $metaTarefas = Tarefa::find($id);
        if(!$metaTarefas){
            return ('Meta sem tarefa');
        }

        return response()->json($metaTarefas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->meta_id = $request->meta_id;
        $tarefa->titulo = $request->titulo;
        $tarefa->descricao = $request -> descricao;
        $tarefa->concluida_em = $request -> concluidaEm;
        $tarefa->data_expiracao = $request-> data_expiracao;
        $tarefa->save();

        return response()->json([
            "message" => "Tarefa alterada com sucesso!",
            "tarefa" => $tarefa]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->delete();

        return response()->json('Tarefa removida com sucesso!');
    }
}
