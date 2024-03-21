<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testamento;
use Illuminate\Http\Request;

class TestamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Testamento::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Testamento::create($request->all())){
            return response()->json([
                'message' => 'Testamento criado com sucesso'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao criar testamento'
        ], 404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $testamento)
    {

        $testamento = Testamento::find($testamento);
        if($testamento){
            return $testamento;
        }
        return response()->json([
            'message' => 'testamento não encontrado'
        ], 404);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $testamento)
    {
       $testamento = Testamento::find($testamento);
       if($testamento){
           $testamento->update($request->all());
           return $testamento;
       }
       return response()->json([
           'message' => 'Ero ao Testamento Livro'
       ], 404);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $testamento)
    {
        if(Testamento::destroy($testamento)){
            return response()->json([
                'message' => 'testamento deletado com sucesso'
            ], 200);
        
        }
        return response()->json([
            'message' => 'Erro ao deletar testamento'
        ], 404);
    }
}
