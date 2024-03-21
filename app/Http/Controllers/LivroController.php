<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return livro::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Livro::create($request->all())){
            return response()->json([
                'message' => 'Livro criado com sucesso'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao criar livro'
        ], 404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $livro)
    {
        $livro = Livro::find($livro);
        if($livro){
            return $livro;
        }
        return response()->json([
            'message' => 'Livro não encontrado'
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $livro)
    {
        $livro = livro::find($livro);
        if($livro){
            $livro->update($request->all());
            return $livro;
        }

        return response()->json([
            'message' => 'Ero ao atualizar Livro'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $livro)
    {
        if(Livro::destroy($livro)){
            return response()->json([
                'message' => 'Livro deletado com sucesso'
            ], 200);
        
        }
        return response()->json([
            'message' => 'Erro ao deletar Livro'
        ], 404);
    }

}
