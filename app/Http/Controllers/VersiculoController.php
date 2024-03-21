<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\versiculo;
use Illuminate\Http\Request;

class VersiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return versiculo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if(versiculo::create($request->all())){
            return response()->json([
                'message' => 'Versiculo criado com sucesso'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao criar Versiculo'
        ], 404);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $versiculo)
    {
        $versiculo = versiculo::find($versiculo);
        if($versiculo){
            return $versiculo;
        }
        return response()->json([
            'message' => 'versiculo não encontrado'
        ], 404);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $versiculo)
    {

        $versiculo = versiculo::find($versiculo);
        if($versiculo){
            $versiculo->update($request->all());
            return $versiculo;
        }

        return response()->json([
            'message' => 'Ero ao versiculo Livro'
        ], 404);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $versiculo)
    {

        if(versiculo::destroy($versiculo)){
            return response()->json([
                'message' => 'versiculo deletado com sucesso'
            ], 200);
        
        }
        return response()->json([
            'message' => 'Erro ao deletar versiculo'
        ], 404);

    }
}
