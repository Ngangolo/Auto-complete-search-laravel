<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfGeneratorController extends Controller
{
    //
  //composer require barryvdh/laravel-dompdf
    public function index() 
    {
        $data = [
            'imagePath'    => public_path('img/juge.jpg'),
            'name'         => 'Kone N\'gangolo',
            'address'      => 'Cote d\Ivoire',
            'mobileNumber' => '58 749 747',
            'email'        => 'konengangolo@email.com',
            'objet'        => 'Conflit de dossier',

        ];
        $pdf = PDF::loadView('resume', $data);
        return $pdf->stream('resume.pdf');
    }

}
