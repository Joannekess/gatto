@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/result.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="box text-center">
                <h1>{{ $hasilDiagnosis['namaKucing'] }}</h1>
                <h4>{{ $hasilDiagnosis['created_at'] }}</h4>
                <hr>
                <h2>{{ $hasilDiagnosis['diseaseName'] }}</h2>
                <h3>{{ number_format($hasilDiagnosis['finalResult'], 2, '.', ',') }}%</h3>
                <p>{{ $hasilDiagnosis['diseaseDetail'] }}</p>
                <h5>PENCEGAHAN</h5>
                <p>{{ $hasilDiagnosis['pencegahan'] }}</p>
                <div class="chat">
                    <a href="https://wa.me/{{ $chat->phone }}?text={{ $chat->message }}" target="_blank">CHAT DOKTER</a> 
                </div>
            </div>
        </div>
        <div class="col">
            <div class="main-image">
                <img src="{{ asset('/image/cat/7.png') }}" alt="cat" class="img-fluid">
            </div>
        </div>
    </div>
</div>



@endsection