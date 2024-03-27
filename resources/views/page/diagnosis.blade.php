@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/diagnosis.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="title">
        <h2>Hi, {{$data->name}}</h2>
        <h3>Apakah kucing anda mengalami gejala ini ?</h3>
    </div>    
    <div class="d-flex justify-content-center">
    <div class="box-form">
        <form action="">
            <table class="t-diagnosis">
                <tbody>
                    @csrf
                    @foreach ($symptoms as $symptom)
                    <tr>
                        <td style="width: 3%;">{{$nomor++}}.</td>
                        <td>{{$symptom->NamaGejala}}</td>
                        <td class="text-start choice">
                            <select name="{{ $symptom->KodeGejala }}" id="{{ $symptom->KodeGejala }}" class="form-select">
                              <option value="0" selected>Tidak Bergejala</option>
                              <option value="1.0" @if(old($symptom->KodeGejala) == 1.0) selected @endif>Pasti</option>
                              <option value="0.8" @if(old($symptom->KodeGejala) == 0.8) selected @endif>Hampir Pasti</option>
                              <option value="0.6" @if(old($symptom->KodeGejala) == 0.6) selected @endif>Kemungkinan Besar</option>
                              <option value="0.4" @if(old($symptom->KodeGejala) == 0.4) selected @endif>Mungkin Iya</option>
                              <option value="0">Tidak Tau</option>
                              <option value="-0.4" @if(old($symptom->KodeGejala) == -0.4) selected @endif>Mungkin Tidak</option>
                              <option value="-0.6" @if(old($symptom->KodeGejala) == -0.6) selected @endif>Kemungkinan Besar Tidak</option>
                              <option value="-0.8" @if(old($symptom->KodeGejala) == -0.8) selected @endif>Hampir Tidak</option>
                              <option value="-1.0" @if(old($symptom->KodeGejala) == -1.0) selected @endif>Pasti Tidak</option>
                            </select>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="mx-auto text-center justify-content-center d-flex mt-3 submit">
                SUBMIT
            </button>
        </form>
    </div>    
    </div>

</div>
@endsection