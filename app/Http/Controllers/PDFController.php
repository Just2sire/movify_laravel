<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    //
    public function generatePDF()
    {

        $users = User::get();

        $data = [
            'title' => "Fiche de billets",
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pic = null;
        $infoBillet = DB::table('billets')
            ->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->first();

        $pdf = PDF::setOptions([
            'images' => true
        ])->loadView('Billet_PDF', compact('infoBillet', 'data', 'pic'))->setPaper('letter', 'landscape');
        $pdf->save(public_path() . "/billet/" . Auth::user()->name . ".pdf");
        return $pdf->download('Billet_PDF.pdf');
            
    }
}
