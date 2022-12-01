<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdfGenerator() {
        $document = ['Testando documento', 'Testando de novo', 'Testando só mais uma vez'];

        $pdf = Pdf::loadView('pdf', compact('document'));

        //para abrir no navegador
        return $pdf->setPaper('a4')->stream('Teste_Pdf.pdf');

        //para baixar o pdf
        // return $pdf->setPaper('a4')->download('Teste_Pdf');
    }
}
