<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Valvula;
use Illuminate\Http\Request;

class ValvulaController extends Controller
{
    public function create () 
    {
        //$opciones = Empresa::pluck('name');

        $opciones = [
            'Sorja',
            'Chiaza',
            'Sacde',
            'Pampa',
            'Certronic',
            'Renova',
            'Pampa',
            'Certronic',
            'Renova',
            'Pampa',
            'Certronic',
            'Renova',
        ];

        return view('valvulas.create', compact('opciones'));
    }

    public function store (Request $request) 
    {
        $attributes = $request->validate([
            'empresa'=> ['required'],
            'marca'=> ['required'],
            'modelo'=> ['required'],
            'n_de_serie'=> ['required'],
            'diametro'=> ['required'],
            'tipo'=>['required']
        ]);
        
        dd($attributes);

        return redirect('/');
    }

    public function show (Valvula $valvula) 
    {
        return view('valvulas.show');
    }

    public function edit (Valvula $valvula) 
    {
        return view('valvulas.edit');
    }
}
