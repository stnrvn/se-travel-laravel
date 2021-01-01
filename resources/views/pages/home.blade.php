@extends('layouts.app')

@section('name','SE - TRAVEL')

@section('content')
    <header class="text-center">
    <h1>Jelajahi indanya dunia <br/>
        Dengan 1 klik
    </h1>
    <p> Kamu akan melihat indahnya <br/>
        momen yang belum anda alami sebelumnya
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4">
        Get Started
    </a>
</header>

<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20k</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3k</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>

<!-- popular -->
    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata Popular</h2>
                    <p>Sesuatu yang anda belum coba</br />
                        sebelumnya di dunia ini</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-popular-content" id="popularContent">
    <div class="container">
      <div class="section-popular-travel row justify-content-center">
        @foreach($items as $item)
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');"
              >
                <div class="travel-country">{{ $item->location }}</div>
                <div class="travel-location">{{ $item->title }}</div>
                <div class="travel-button mt-auto">
                  <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                    View Details
                  </a>
                </div>
              </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>

<!-- networks -->
    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                <h2>Our Netwoks</h2>
                <p>Perusahaan yang mempercayakan kami<br/>
                    lebih dari sekedar trip</p>
            </div>
            <div class="col-md-8 text-center">
                <img src="frontend/images/partner/partner.png" alt="Logo Partner" class="img-partner">
            </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="col text-center">
                <h2>Mereka Mencintai Kami</h2>
                <p>Momen bersama kami memberikan mereka<br/>
                    pengalaman terbaik</p>
            </div>
        </div>
    </section>

<!-- testimonial -->
    <section class="section section-testimonial-content" id="testimonialContet">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/avatar/1.jpg" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Sutan Ervin</h3>
                            <p class="testimonial">"Perjalanan yang luar biasa<br/>
                                terima kasih SE-Travel"</p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">Trip to Ubud</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/avatar/2.jpg" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Shafa</h3>
                            <p class="testimonial">"Aku tidak tahu lagi apa yang<br/>
                                ingin kukatakan, karena<br/>
                                trip ini sangat luar biasa"</p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">Trip to Ubud</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/avatar/3.jpg" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Sabrina</h3>
                            <p class="testimonial">"Sangat menantika trip</br>
                                berikutnya bersama<br/>
                                SE-TRAVEL"</p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">Trip to Ubud</p>
                    </div>
                </div>

                
            </div>

            <div class="col-12 text-center">
                <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I need Help</a>
                <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
            </div>
            
        </div>
    </section>
</main>
@endsection