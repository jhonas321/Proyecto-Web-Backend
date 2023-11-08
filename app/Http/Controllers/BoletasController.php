<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use PDF;

class BoletasController extends Controller
{
    public function generarBoleta()
    {
        $data = ['title' => 'Mi Documento', 'content' => 'Este es el contenido del documento.'];
        $pdf = PDF::loadView('boleta', $data);

        $pdfPath = public_path('boleta.pdf');
        $pdf->save($pdfPath);

        return response()->file($pdfPath);
    }
}
