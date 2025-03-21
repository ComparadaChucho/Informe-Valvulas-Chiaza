<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Informe;
use App\Models\Valvula;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;

class InformeController extends Controller
{
    public function index()
    {
        return view('informes.index');
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
            // Elaborado por / Aprobado por
            'elaborado_por' => ['required'],
            'aprobado_por' => ['required'],
        ]);

        $valvula = Valvula::where('n_de_serie', $datos['valvula'])->first();

        $empresa = Empresa::where('id', $valvula['empresa_id'])->first();

        // Cargar la vista y generar el PDF
        $pdf = FacadePdf::loadView('pdf', compact('datos', 'valvula', 'empresa'));

        $pdfPath = storage_path('app/temp/informe.pdf');
        file_put_contents($pdfPath, $pdf->output());

        // Devolver la vista con un botón para guardar el informe
        return response()->download($pdfPath, 'informe.pdf');
    }
}
