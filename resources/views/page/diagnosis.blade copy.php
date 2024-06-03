@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/diagnosis.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="title">
        <h2>Hi, {{$data->name}}! Siapa nama kucing kamu?</h3>
    </div>    
    <div class="d-flex justify-content-center text-center">
        <form action={{ route('diagnosisRun') }} method="POST">
            <input type="text" id="namaKucing" name="namaKucing">
            <h3>Apakah kucing kamu mengalami gejala ini?</h3>
            @csrf
            @foreach ($symptoms as $symptom)
            <div class="justify-content-center d-flex">
                <div class="justify-content-center">
                    <label for="{{ $symptom->id }}" class="text-center title-question">{{ $symptom->namaGejala }}</label>
                    <select name="{{ $symptom->id }}" id="{{ $symptom->id }}" class="box-select form-select" multiple>
                        <option value="0" selected>Tidak Bergejala</option>
                        <option value="0.2" @if(old($symptom->kodeGejala) == 0.2) selected @endif>Tidak Tau</option>
                        <option value="0.4" @if(old($symptom->kodeGejala) == 0.4) selected @endif>Sedikit Yakin</option>
                        <option value="0.6" @if(old($symptom->kodeGejala) == 0.6) selected @endif>Cukup Yakin</option>
                        <option value="0.8" @if(old($symptom->kodeGejala) == 0.8) selected @endif>Yakin</option>
                        <option value="1.0" @if(old($symptom->kodeGejala) == 1.0) selected @endif>Sangat Yakin</option>
                    </select>
                </div>
            </div>
            @endforeach
            <button class="mx-auto text-center justify-content-center d-flex mt-3 submit">
                SUBMIT
            </button>
        </form>
    </div>    
    </div>

</div>
@endsection