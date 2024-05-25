<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use App\Models\Disease;
use App\Models\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DiagnosisController extends Controller
{
    public function diagnosis() {
        $data = Auth::user();
        $symptoms = Symptom::all();
        // Log::info($symptoms);

        return view('page.diagnosis')->with('data', $data)->with('symptoms', $symptoms)->with('nomor', 1);

    }

    public function diagnosisRun(Request $request) {

        // Hitung CFHe masing - masing penyakit

        $totalPenyakit = Disease::count();

        $CFHe = [];
        for($i = 1; $i <= $totalPenyakit; $i++) {
            $j = 1;

            $symptoms = Rule::where('penyakit_id', $i)->orderBy('gejala_id')->get();
            Log::info('Gejala');
            Log::info($symptoms);
            foreach ($symptoms as $symptom) {
                $CFHe[$j] = $symptom->CFValue * $request[$j];
                $j++;
            };
            $nilaiCFHe[$i] = $CFHe;
        }
        Log::info('Nilai CFHe');
        Log::info($nilaiCFHe);

        // CF COMBINE
        
        for($i = 1; $i <= $totalPenyakit; $i++) {
            $CFCombine = 0;
            $CFCombine = $nilaiCFHe[$i][1] + ($nilaiCFHe[$i][2] * (1-$nilaiCFHe[$i][1]));
            for ($j=3; $j <= count($nilaiCFHe[$i]); $j++) { 
                $CFCombine = $CFCombine + ( $nilaiCFHe[$i][$j] * (1-$CFCombine));
                // $test[$j] = $CFCombine;
            };
            // Log::info('CF test');
            // Log::info($test);
            $nilaiCFCombine[$i] = $CFCombine;


        }
        Log::info('Nilai CFCombine');
        Log::info($nilaiCFCombine);

        // Nilai Max CFCombine
        
        $value = max($nilaiCFCombine);

        // if ($value == 0) {
        //     return redirect()->back()->withErrors('Tidak ada penyakit yang terdeteksi');
        // }

        Log::info('Nilai Max CFCombine');
        Log::info($value);

        $disease = Disease::where('id', array_search($value, $nilaiCFCombine))->first();
        Log::info('Penyakit');
        Log::info($disease);

        // $request->validate([
        //     'namaKucing' => 'required'
        // ], 
        // [
        //     'namaKucing.required' => 'Nama Kucing harus diisi'
        // ]);
        
        

        if($request->namaKucing == null) {
            $request->namaKucing = 'Kucing';
        }
        Log::info($request->namaKucing);

        $hasilDiagnosis = [
            'finalResult' => $value * 100,
            'diseaseName' => $disease->namaPenyakit,
            'diseaseDetail' => $disease->detailPenyakit,
            'namaKucing' => $request->namaKucing,
            'pencegahan' => $disease->pencegahanPenyakit,
            'created_at' => now()->format('d/m/Y')
        ];

        DB::table('histories')->insert([
            'user_id' => Auth::id(),
            'penyakit_id' => $disease->id,
            'hasilDiagnosis' => $hasilDiagnosis['finalResult'],
            'namaKucing' => $request->namaKucing,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Log::info($hasilDiagnosis);

        $chat = DB::table('whatsapps')->first();
        
        return view('page.result')->with('hasilDiagnosis', $hasilDiagnosis)->with('chat', $chat);
    }
}



