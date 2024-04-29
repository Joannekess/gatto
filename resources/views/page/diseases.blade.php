@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/diseases.css') }}">
@endsection
@section('content')
<div id="sec-1">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="img">
                    <img src="{{ asset('/image/cat/3.png') }}" alt="cat" class="img-fluid">
                </div>
            </div>
            <div class="col">
                <div class="title">
                    <h1>PENYAKIT KUCING YANG ZOONOSIS</h1>
                    <h3>Zoonosis adalah sebutan untuk penyakit yang berasal dari hewan dan dapat ditularkan ke manusia. Penyakit tersebut dapat disebabkan oleh virus, bakteri, jamur, protozoa, maupun cacing.
                    <br><br>Gatto akan membantu kalian dalam mendiagnosa kucing dengan penyakit zoonosis, yaitu Leptospirosis, Rabies, Ringworm, Toxoplasma, dan Toxocariasis.</h3>
                    </div>
                </div>
            </div>
        </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($data as $data)
            <div class="swiper-slide">
                <h1>{{ $data->namaPenyakit }}</h1>
                <h3>What is {{ $data->namaPenyakit }}?</h3>
                <p>{{ $data->detailPenyakit }}</p>
                <h2>PENCEGAHAN</h2>
                <p>{{ $data->pencegahanPenyakit }}</p>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
@endsection