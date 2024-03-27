@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/diseases.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="img">
                <img src="{{ asset('/image/cat-7.png') }}" alt="cat">
            </div>
        </div>
        <div class="col">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h1>CAT DISEASES</h1>
                        <h3>That Zoonotic</h3>
                        <p>Zoonosis refers to diseases that can be passed from animals to humans. These diseases are sometimes called zoonotic diseases. Animals can carry harmful germs, such as bacteria, fungi, parasites, and viruses.</p>
                        <p>Gatto itself will assist in diagnosing cats with zoonotic diseases, including Lepritosis, Rabies, Ringworm, Scabies, and Toxocariasis. </p>
                        <p>You can slide the card to view the explanation and how to handle these conditions</p>
                        <h2><i class="bi bi-arrow-right"></i></h2>

                    </div>
                    <div class="swiper-slide">
                        <h1>LEPRITOSIS</h1>
                        <h3>What is Lepritosis?</h3>
                        <p>Leptospirosis is a bacterial disease that affects humans and animals. It is caused by bacteria of the genus Leptospira. In humans, it can cause a wide range of symptoms, some of which may be mistaken for other diseases. Some infected persons, however, may have no symptoms at all.</p>
                        <p>Without treatment, Leptospirosis can lead to kidney damage, meningitis (inflammation of the membrane around the brain and spinal cord), liver failure, respiratory distress, and even death.</p>
                        {{-- <h2><i class="bi bi-arrow-right"></i></h2> --}}
                    </div>
                    <div class="swiper-slide">
                        <h1>RABIES</h1>
                        <h3>What is Rabies?</h3>
                        <p>Rabies is a viral disease that causes inflammation of the brain in humans and other mammals. Early symptoms can include fever and tingling at the site of exposure.</p>
                        <p>Once symptoms appear, the result is nearly always death. The time period between contracting the disease and the start of symptoms is usually one to three months, but can vary from less than one week to more than one year.</p>
                        {{-- <h2><i class="bi bi-arrow-right"></i></h2> --}}
                    </div>
                    <div class="swiper-slide">
                        <h1>RINGWORM</h1>
                        <h3>What is Ringworm?</h3>
                        <p>Ringworm is a common fungal infection that can cause a red or silvery ring-like rash on the skin. Ringworm commonly affects arms and legs, but it can appear almost anywhere on the body. Despite its name, ringworm doesn't have anything to do with worms.</p>
                        <p>Ringworm is also called tinea. When it appears on the scalp, it's called tinea capitis. On other parts of the body, tinea is often known by different names, such as athlete's foot (tinea pedis) and jock itch (tinea cruris).</p>
                        {{-- <h2><i class="bi bi-arrow-right"></i></h2> --}}
                    </div>
                    <div class="swiper-slide">
                        <h1>SCABIES</h1>
                        <h3>What is Scabies?</h3>
                        <p>Scabies is an itchy skin condition caused by a tiny burrowing mite called Sarcoptes scabiei. Intense itching occurs in the area where the mite burrows. The urge to scratch may be especially strong at night.</p>
                        <p>Scabies is contagious and can spread quickly through close physical contact in a family, child care group, school class, nursing home, or prison. Because scabies is so contagious, doctors often recommend treatment for entire families or contact groups.</p>
                        {{-- <h2><i class="bi bi-arrow-right"></i></h2> --}}
                    </div>
                    <div class="swiper-slide">
                        <h1>TOXOCARIASIS</h1>
                        <h3>What is Toxocariasis?</h3>
                        <p>Toxocariasis is an infection transmitted from animals to humans (zoonosis) caused by the parasitic roundworms commonly found in the intestine of dogs (Toxocara canis) and cats (T. cati). The disease is also known as visceral larva migrans (VLM).</p>
                        <p>Humans can become infected by accidentally swallowing dirt that has been contaminated with dog or cat feces that contain infectious Toxocara eggs. Young children are at the highest risk of infection.</p>
                        {{-- <h2><i class="bi bi-arrow-right"></i></h2> --}}
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
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