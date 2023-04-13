<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Tgen002_parroquia;

class ReportController extends Controller
{
    public function pdfBoleta()
    {
        $parroquia=Tgen002_parroquia::all();

        $pdf = Pdf::loadView('report.boleta', compact('parroquia'));
        $pdf->add_info('Boleta:N° BC-2022-B- 00001', 'N° BC-2022-B- 00001');
        return $pdf->stream();
    }
}
