<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiagnosisController extends Controller
{
    public function diagnosis() {
        $data = Auth::user();
        $symptoms = Symptom::groupBy('NamaGejala')->get();
        return view('page.diagnosis')->with('data', $data)->with('symptoms', $symptoms)->with('nomor', 1);
    }

    public function diagnosisRun(Request $request) {
        


    }
}
