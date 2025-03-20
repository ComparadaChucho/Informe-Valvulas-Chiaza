<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use App\Models\Valvula;
use Illuminate\Http\Request;

class InformeController extends Controller
{
    public function index()
    {
        $informes = Informe::latest()->get();

        return view('informes.index',[
            'informes' => $informes,
        ]);
    }

    public function create()
    {
        $valvulas = Valvula::pluck('n_de_serie');

        return view('informes.create', compact('valvulas'));
    }

    public function store(Request $request) 
    {
        $datos = $request->validate([
            'numero_acta'=> ['required'],
            'tag'           => ['required'],
            'fecha'         => ['required'],
            // Valvula
            'valvula'       => ['required'],
            // Unidades
            'presion'       => ['required'],
            'diametro'      => ['required'],
            'otras'         => ['required'],
            // Tareas Efectuadas
            'tareas_efectuadas'=> ['required'],
            // Caracteristicas de la Calibracion
            'presion-timbre'=> ['required'],
            'presion-venteo'=> ['required'],
            'presion-cierre'=> ['required'],
            'presion-timbre-1'=> ['required'],
            'presion-venteo-1'=> ['required'],
            'presion-cierre-1'=> ['required'],
            'presion-timbre-2'=> ['required'],
            'presion-venteo-2'=> ['required'],
            'presion-cierre-2'=> ['required'],
            // Instrumentos Patrones
            'descripcion'   => ['required'],
            'marca'         => ['required'],
            'modelo'        => ['required'],
            'otros'         => ['required'],
            'descripcion-1' => ['required'],
            'marca-1'       => ['required'],
            'modelo-1'      => ['required'],
            'otros-1'       => ['required'],
            'descripcion-2' => ['required'],
            'marca-2'       => ['required'],
            'modelo-2'      => ['required'],
            'otros-2'       => ['required'],
            // Observaciones 
            'observaciones' => ['required'],
        ]);

        return view ('informes.pdf', compact('datos'));
    }
}
