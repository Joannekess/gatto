<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class HistoriesController extends Controller
{
    //
    public function history()
    {
        $i = 1;
        $histories = DB::table('histories')
            ->where('histories.user_id', '=', auth()->user()->id)
            ->join('users', 'histories.user_id', '=', 'users.id')
            ->join('diseases', 'histories.penyakit_id', '=', 'diseases.id')
            ->select('histories.*', 'users.name', 'diseases.namaPenyakit as namaPenyakit', 'diseases.detailPenyakit as detailPenyakit', 'diseases.pencegahanPenyakit as pencegahanPenyakit')
            ->orderBy('histories.created_at', 'desc')
            ->get();

        $histories->transform(function ($history, $key) {
            $history->created_at = Carbon::parse($history->created_at)->format('d/m/Y');
            return $history;
        });

        $chat = DB::table('whatsapps')->first();
        
        Log::info($histories);

        return view('page.history', ['histories' => $histories, 'nomor' => $i]) -> with('chat', $chat);
    }
}
