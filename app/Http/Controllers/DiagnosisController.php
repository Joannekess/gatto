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

    // CHECK RULES
    public function diagnosischeck(Request $request){

        // Rules 1
        if( $rules == "G01" && $rules == "G02" && $rules == "G03" && $rules == "G04" && $rules == "G05" && $rules == "G06" && $rules == "G07" && $rules == "G08" && $rules == "G09"){
            return $hasilrules == "P01";
        }

        // Rules 2
        if( $rules == "G01" && $rules == "G10" && $rules == "G11" && $rules == "G12" && $rules == "G13" && $rules == "G14" && $rules == "G15" && $rules == "G16" && $rules == "G17" && $rules == "G18"){
            return $hasilrules == "P02";
        }

        // Rules 3
        if( $rules == "G19" && $rules == "G20" && $rules == "G21" && $rules == "G22" && $rules == "G23" && $rules == "G24"){
            return $hasilrules == "P03";
        }

        // Rules 4
        if( $rules == "G01" && $rules == "G04" && $rules == "G25" && $rules == "G26" && $rules == "G03" && $rules == "G02" && $rules == "G27" && $rules == "G28" && $rules == "G08" && $rules == "G29"){
            return $hasilrules == "P04";
        }

        // Rules 5
        if( $rules == "G02" && $rules == "G03" && $rules == "G08" && $rules == "G30" && $rules == "G09" && $rules == "G31"){
            return $hasilrules == "P05";
        }
    }

    public function selectdiagnosis(Request $request){

        $namaKucing = $request->namaKucing;

        $symptoms = Symptom::all();
        $rules = $request->gejala;
        $hasilrules = [];
        // $rule = [
        //     0 => [1, 2, 3, 4, 5, 6, 7, 8, 9],
        //     1 => [1, 10, 11, 12, 13, 14, 15, 16, 17, 18],
        //     2 => [19, 20, 21, 22, 23, 24],
        //     3 => [1, 4, 25, 26, 3, 2, 27, 28, 8, 29],
        //     4 => [2, 3, 8, 30, 9, 31],
        // ];
        $rule1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $rule2 = [1, 10, 11, 12, 13, 14, 15, 16, 17, 18];
        $rule3 = [19, 20, 21, 22, 23, 24];
        $rule4 = [1, 2, 3, 4, 8, 25, 26, 27, 28, 29];
        $rule5 = [2, 3, 8, 9, 30, 31];

        if ($rules == $rule1 or $rules == $rule2 or $rules == $rule3 or $rules == $rule4 or $rules == $rule5){
            return view('page.diagnosis2')->with('rules', $rules)->with('symptoms', $symptoms)->with('namaKucing', $namaKucing);
        }
        else {
            return redirect()->back()->withErrors('Tidak ada penyakit yang terdeteksi');

        }

        Log::info($rules);

        // $totalrules = count($rules);
        // Log::info($totalrules);

        if ($rules == null) {
            return redirect()->back()->withErrors('Tidak ada penyakit yang terdeteksi');
        }        


        // return view('page.diagnosis2')->with('rules', $rules)->with('symptoms', $symptoms)->with('namaKucing', $namaKucing);
        
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

        if ($value == 0) {
            return redirect()->back()->withErrors('Tidak ada penyakit yang terdeteksi');
        }

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



