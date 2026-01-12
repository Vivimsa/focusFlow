<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\Request;

class MetasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Meta::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $metas = Meta::create([
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
        $metas = Meta::where('id',$id)
            ->where('user_id',auth()->id())
            ->first();

        return response()->json($metas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $metas = Meta::where('id',$id)
            ->where('user_id',auth()->id())
            ->update([
                'titulo' => $request->titulo,
                'descricao' => $request->descricao,
                'prioridade' => $request->prioridade,
                'data_expiracao' => $request->data_expiracao,
                'concluida_em' => $request->concluida_em,
            ]);

        return response()->json($metas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Meta::where('id',$id)
            ->where('user_id',auth()->id())
            ->softDelete();

        return response()->json(['message' => 'Meta deletada com sucesso']);
    }
}
