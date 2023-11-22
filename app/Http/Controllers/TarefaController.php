<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function listarTarefas(){

        return response()->json(Tarefa::All(), 200);

    }
    public function listarTarefa($id){

        $tarefa = Tarefa::Find($id);
        if(is_null($tarefa)){
            return response()->json(['mensagem' => 'Tarefa não encontrada'], 404);
        }else{
            return response()->json($tarefa, 200);
        }
        
    }

    public function adicionarTarefa(Request $request){
        
        $tarefaCriada = Tarefa::create($request->all());

        return response($tarefaCriada, 201);


    }

    public function atualizarTarefa(Request $request, $id){
        
        $tarefa = Tarefa::find($id);
        if(is_null($tarefa)){
            return response()->json(['mensagem' => 'Tarefa não encontrada'], 404);
        }else{
            $tarefa->update($request->all());
            return response($tarefa , 202);
        }
        
    }

    public function deletarTarefa($id){
        $tarefa = Tarefa::Find($id);
        if(is_null($tarefa)){
            return response()->json(['mensagem' => 'Tarefa não encontrada'], 404);
        }else{
            $tarefa->delete();
            return true;
        }
    }
}
