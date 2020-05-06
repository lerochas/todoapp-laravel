<?php

namespace App\Http\Controllers;

class TarefasController{
    public function index(){
        $tarefas = [
            'Estudas Programação',
            'Estudar Teologia',
            'Malhar',
            'Assistir Série'
        ];
    
        return view('tarefas.index', compact('tarefas'));
    }
}