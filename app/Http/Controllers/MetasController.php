<?php

namespace App\Http\Controllers;

use App\Models\Metas;
use Illuminate\Http\Request;

class MetasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Metas::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $metas = Metas::create([
            'user_id' => auth()->id(),
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'prioridade' => $request->prioridade,
            'data_expiracao' => $request->data_expiracao,
            'concluida_em' => $request->concluida_em,
        ]);

        return response()->json($metas);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $metas = Metas::find($id);
        if(!$metas){
            return response()->json(['message' => 'Meta não encontrada'], 404);
        }
        return response()->json($metas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $metas = Metas::find($id);
        if(!$metas){
            return response()->json(['message' => 'Meta não encontrada'], 404);
        }

        $metas->user_id = $request->user_id;
        $metas->titulo = $request->titulo;
        $metas->descricao = $request->descricao;
        $metas->prioridade = $request->prioridade;
        $metas->data_expiracao = $request->data_expiracao;
        $metas->concluida_em = $request->concluida_em;
        $metas->save();

        return response()->json($metas,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $meta = Metas::find($id);
        if(!$meta){
            return response()->json(['message' => 'Meta não encontrada'], 404);
        }
        $meta->delete();
        return response()->json(['message' => 'Meta deletada com sucesso']);
    }
}
