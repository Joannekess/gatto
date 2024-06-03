@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/diagnosis.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="d-flex justify-content-center text-center">
        <form action={{ route('diagnosisRun') }} method="POST">
            <input type="text" id="namaKucing" name="namaKucing" value={{ $namaKucing }}>
            <h3>Seberapa yakin kamu terhadap gejala tersebut?</h3>
            @csrf
            @foreach ($rules as $rule)
            <div class="justify-content-center d-flex">
                <div class="justify-content-center">
                    <label for="{{ $rule }}" class="text-center title-question">{{ $symptoms[$rule-1]->namaGejala }}</label>
                    <select name="{{ $rule }}" id="{{ $rule }}" class="box-select form-select" multiple>
                        <option value="0" selected class="d-none">Tidak Bergejala</option>
                        <option value="0.2">Tidak Yakin</option>
                        <option value="0.4">Sedikit Yakin</option>
                        <option value="0.6">Cukup Yakin</option>
                        <option value="0.8">Yakin</option>
                        <option value="1.0">Sangat Yakin</option>
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