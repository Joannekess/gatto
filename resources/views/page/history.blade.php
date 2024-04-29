@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/history.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="title">
        <h1>History</h1>
    </div>
    <table class="table-history">
        <thead>
            <tr>
                <th style="border-radius: 20px 0 0;">No.</th>
                <th>Tanggal</th>
                <th>Nama Kucing</th>
                <th>Nama Penyakit</th>
                <th>Persentase</th>
                <th style="border-radius: 0 20px 0 0;">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($histories as $history)
                <tr>
                    <td>{{ $nomor++}}.</td>
                    <td>{{ $history->created_at }}</td>
                    <td>{{ $history->namaKucing }}</td>
                    <td>{{ $history->namaPenyakit }}</td>
                    <td>{{  number_format($history->hasilDiagnosis, 2, '.', ',') }}%</td>
                    <td>
                        <button type="button" class="btn-remove" data-bs-toggle="modal" data-bs-target="#{{ $history->id }}">
                        <i class="bi bi-search-heart-fill"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    @foreach($histories as $history)
    <div class="modal fade" id="{{ $history->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h1>{{ $history->namaKucing }}</h1>
                    <h4>{{ $history->created_at }}</h4>
                    <hr>
                    <h2>{{ $history->namaPenyakit }}</h2>
                    <h3>{{ number_format($history->hasilDiagnosis, 2, '.', ',') }}%</h3>
                    <p>{{ $history->detailPenyakit }}</p>
                    <h5>PENCEGAHAN</h5>
                    <p>{{ $history->pencegahanPenyakit }}</p>
                    <div class="chat">
                        <a href="https://wa.me/{{ $chat->phone }}?text={{ $chat->message }}" target="_blank">CHAT DOKTER</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
    })
</script>
@endsection