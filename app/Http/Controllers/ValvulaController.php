<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Valvula;
use Illuminate\Http\Request;

class ValvulaController extends Controller
{
    public function index()
    {
        $valvulas = Valvula::latest()->with(['informes','empresa'])->get();

        return view('valvulas.index',[
            'valvulas' => $valvulas
        ]);
    }

    public function create () 
    {
        return view('valvulas.create');
    }

    public function store (Request $request) 
    {
        $attributes = $request->validate([
            'empresa'       => ['required', 'string'],
            'marca'         => ['required'],
            'modelo'        => ['required'],
            'n_de_serie'    => ['required', 'unique:valvulas,n_de_serie'],
            'diametro'      => ['required'],
            'tipo'          => ['required']
        ]);
        
        $attributes['tipo'] = strtolower($attributes['tipo']);

        $empresa = Empresa::firstOrCreate(['name' => $request->empresa]);

        if(!$empresa) {
            return back()->withErrors(['empresa' => 'La empresa no existe.'])->withInput();
        }

        if($attributes['tipo']!=='resorte' and $attributes['tipo']!=='piloto') {
            return back()->withErrors(['tipo' => 'Tipo de valvula erroneo'])->withInput();
        }

        Valvula::create([
            'empresa_id'    => $empresa->id,
            'marca'         => $attributes['marca'],
            'modelo'        => $attributes['modelo'],
            'n_de_serie'    => $attributes['n_de_serie'],
            'diametro'      => $attributes['diametro'],
            'tipo_valvula'  => $attributes['tipo'],
        ]);

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
