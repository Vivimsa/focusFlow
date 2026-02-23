<?php

namespace App\Http\Controllers;

use App\Enums\StatusTarefaEnum;
use App\Models\Tarefa;
use App\Models\Meta;
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
        $meta = Meta::where('id', $request->meta_id)
            ->where('user_id',auth()->id())
            ->first();

        if(!$meta) {
            return response()->json(['error' => 'Meta não encontrada'], 404);
        }

        $tarefa = Tarefa::create([
            'user_id' => auth()->id(),
            'meta_id' => $request->meta_id,
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'concluida_em' => $request->concluidaEm,
            'data_expiracao' => $request->dataExpiracao
        ]);

        return response()->json($tarefa);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $metaTarefas = Tarefa::where('id',$id)
            ->where('user_id',auth()->id())
            ->first();

        return response()->json($metaTarefas);
    }

    public function listaTarefasPorMeta(string $metaId)
    {
        $tarefas = Tarefa::where('meta_id', $metaId)
            ->where('user_id', auth()->id())
            ->get();

        return response()->json($tarefas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tarefa = Tarefa::where('id',$id)
            ->where('user_id',auth()->id())
            ->update([
                'meta_id' => $request->meta_id,
                'titulo' => $request->titulo,
                'descricao' => $request->descricao,
                'concluida_em' => $request->concluidaEm,
                'data_expiracao' => $request->data_expiracao,
            ]);

        return response()->json($tarefa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Tarefa::where('id',$id)
            ->where('user_id',auth()->id())
            ->delete();

        return response()->json('Tarefa removida com sucesso!');
    }
}
