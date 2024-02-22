@extends('layouts.wrapper')
@section('content')
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 2 - THE INTRO SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <section id="home" class="intro-section">
        <div class="container">
        <div class="row align-items-center text-white">
            <!-- START THE CONTENT FOR THE INTRO  -->
            <div class="col-md-6 intros text-start">
            <h1 class="display-2">
                <span class="display-2--intro">Ulam Pun Datang !</span>
                <span class="display-2--description lh-base">
                  Lahan kecil kolektif untuk belajar, bereksplorasi dan bereksperimen dengan Ruang Kota untuk Pertanian.
                </span>
            </h1>
            <button type="button" class="rounded-pill btn-rounded">
              <a href="https://api.whatsapp.com/send?phone=628114490500" style="text-decoration: none;color: inherit;">Get in Touch</a>
                <span><i class="fas fa-arrow-right"></i></span>
            </button>
            </div>
            <!-- START THE CONTENT FOR THE VIDEO -->
            <div class="col-md-6 intros text-end">
              <div class="video-box">
                  <img src="{{ asset('assets/images/home/section-1.png') }}" alt="video illutration" class="img-fluid">
                  <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
                  <span>
                      <i class="fas fa-play-circle"></i>
                  </span>
                  <span class="border-animation border-animation--border-1"></span>
                  <span class="border-animation border-animation--border-2"></span>
                  </a>
              </div>
            </div>
        </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
  
<!-- //////////////////////////////////////////////////////////////////////////////////////////////
                              START SECTION 3 - THE CAMPANIES SECTION  
////////////////////////////////////////////////////////////////////////////////////////////////////-->
  
    <section id="campanies" class="campanies">
      <div class="container">
        <div class="row text-center">
          <h4 class="fw-bold lead mb-3">Trusted by campanies</h4>
          <div class="heading-line mb-5"></div>
        </div>
      </div>
      <!-- START THE CAMPANIES CONTENT  -->
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-2">
            <div class="campanies__logo-box shadow-sm">
              <img src="{{ asset('assets/images/campanies/campany-1.png') }}" alt="Campany 1 logo" title="Campany 1 Logo" class="img-fluid">
            </div>
          </div>
          <div class="col-md-4 col-lg-2">
            <div class="campanies__logo-box shadow-sm">
              <img src="{{ asset('assets/images/campanies/campany-2.png') }}" alt="Campany 2 logo" title="Campany 2 Logo" class="img-fluid">
            </div>
          </div>
          <div class="col-md-4 col-lg-2">
            <div class="campanies__logo-box shadow-sm">
              <img src="{{ asset('assets/images/campanies/campany-3.png') }}" alt="Campany 3 logo" title="Campany 3 Logo" class="img-fluid">
            </div>
          </div>
          <div class="col-md-4 col-lg-2">
            <div class="campanies__logo-box shadow-sm">
              <img src="{{ asset('assets/images/campanies/campany-4.png') }}" alt="Campany 4 logo" title="Campany 4 Logo" class="img-fluid">
            </div>
          </div>
          <div class="col-md-4 col-lg-2">
            <div class="campanies__logo-box shadow-sm">
              <img src="{{ asset('assets/images/campanies/campany-5.png') }}" alt="Campany 5 logo" title="Campany 5 Logo" class="img-fluid">
            </div>
          </div>
          <div class="col-md-4 col-lg-2">
            <div class="campanies__logo-box shadow-sm">
              <img src="{{ asset('assets/images/campanies/campany-6.png') }}" alt="Campany 6 logo" title="Campany 6 Logo" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
  
  <!-- //////////////////////////////////////////////////////////////////////////////////////////////
                           START SECTION 4 - THE SERVICES  
  ///////////////////////////////////////////////////////////////////////////////////////////////////-->
  <section id="about" class="services">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold">Tentang Kami</h1>
        <div class="heading-line mb-1"></div>
      </div>
    <!-- START THE DESCRIPTION CONTENT  -->
      <div class="row pt-2 pb-2 mt-0 mb-3">
        <div class="col-md-6 border-right">
          <div class="bg-white p-3">
            <h2 class="fw-bold text-capitalize text-center">
              Microgreen dicinta, <br> 
              Ulam Pun Datang!
            </h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bg-white p-4 text-start">
            <p class="fw-light">
              Microgreens, sayuran dengan kandungan nutrisi yang melimpah tentu saja akan menawarkan segudang manfat bagi kesehatan untuk kamu dan keluarga tercinta.
              Setiap microgreen dari kami yang akan siap kamu konsumsi telah ditanam dan dipanen dengan sangat hati-hati dan penuh perhatian. Kami tidak hanya menjamin kesegaran namun juga mendukung pertanian lokal, mengurangi jejak karbon, dan mendukung sistem pangan berkelanjutan.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- //////////////////////////////////////////////////////////////////////////////////////////////
                           START SECTION 4 - THE SERVICES  
  ///////////////////////////////////////////////////////////////////////////////////////////////////-->
  <section id="produk" class="services">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold text-uppercase">Produk</h1>
        <div class="heading-line"></div>
        <p class="lead">Produk Unggulan Kami</p>
      </div>
    <!-- START THE CONTENT FOR THE SERVICES  -->
    <div class="container">
      <!-- START THE MARKETING CONTENT  -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-paper-plane"></div>
            <h3 class="display-3--title mt-1">Peashoot</h3>
            <p class="lh-lg">
              Microgreen yang kaya akan vitamin A, vitamin C, vitamin K, asam folat, kalsium, besi, dan magnesium
              Rp.20.000 - Rp.25.000
            </p>
            <button type="button" class="rounded-pill btn-rounded border-theme">Learn more
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
          <div class="services__pic">
            <img src="{{ asset('assets/images/home/Peashoot.jpg') }}" alt="marketing illustration" class="img-fluid">
          </div>
        </div>
      </div>
      <!-- START THE WEB DEVELOPMENT CONTENT  -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
          <div class="services__pic">
            <img src="{{ asset('assets/images/home/SunFlower.png') }}" alt="web development illustration" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-code"></div>
            <h3 class="display-3--title mt-1">Sun Flower</h3>
            <p class="lh-lg">
              Microgreen yang kaya akan vitamin E, vitamin A, vitamin C, vitamin K, asam folat, selium, dan seng.
              Rp.20.000 - Rp.25.000
            </p>
            <button type="button" class="rounded-pill btn-rounded border-theme">Learn more
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
      </div>
      <!-- START THE CLOUD HOSTING CONTENT  -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-cloud-upload-alt"></div>
            <h3 class="display-3--title mt-1">Red Radish</h3>
            <p class="lh-lg">
              Microgreen yang kaya akan vitamin C, vitamin K, asam folat, kalsium, dan potasium
              Rp.23.000 - Rp.28.000
            </p>
            <button type="button" class="rounded-pill btn-rounded border-theme">Learn more
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
          <div class="services__pic">
            <img src="{{ asset('assets/images/home/RedRadish.jpg') }}" alt="cloud hosting illustration" class="img-fluid">
          </div>
        </div>
      </div>
      <!-- START THE CLOUD HOSTING CONTENT  -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
          <div class="services__pic">
            <img src="{{ asset('assets/images/home/Mint.jpg') }}" alt="web development illustration" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-code"></div>
            <h3 class="display-3--title mt-1">Mint</h3>
            <p class="lh-lg">
              Mint kaya akan vitamin A, mint juga baik untuk kulit karena mengandung senyawa yang berfungsi untuk memperkuat jaringan kulit
              Rp.10.000 - Rp.18.000
            </p>
            <button type="button" class="rounded-pill btn-rounded border-theme">Learn more
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                                 START SECTION 5 - THE TESTIMONIALS  
  /////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <section id="testimonials" class="testimonials">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div class="container">
      <div class="row text-center text-white">
        <h1 class="display-3 fw-bold">Testimonials</h1>
        <hr style="width: 100px; height: 3px; " class="mx-auto">
        <p class="lead pt-1">Katanya Microgreen kami itu..</p>
      </div>
  
      <!-- START THE CAROUSEL CONTENT  -->
      <div class="row align-items-center">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- CAROUSEL ITEM 1 -->
            <div class="carousel-item active">
              <!-- testimonials card  -->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Masih fresh, padahal perjalanan 3 hari. packaging dan microgreen dari ulam pun datang terbaik pokoknya
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!-- client picture  -->
              <div class="testimonials__picture">
                <img src="{{ asset('assets/images/testimonials/client-1.jpg') }}" alt="client-1 picture" class="rounded-circle img-fluid">
              </div>
              <!-- client name & role  -->
              <div class="testimonials__name">
                <h3>Ramadhian</h3>
                {{-- <p class="fw-light">CEO & founder</p> --}}
              </div>
            </div>     
            <!-- CAROUSEL ITEM 2 -->
            <div class="carousel-item">
              <!-- testimonials card  -->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Ngak nyesel jadiin Ulam Pun Datang supllier buat store, microgreen tetap fresh. mantap
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!-- client picture  -->
              <div class="testimonials__picture">
                <img src="{{ asset('assets/images/testimonials/client-4.jpg') }}" alt="client-2 picture" class="rounded-circle img-fluid">
              </div>
              <!-- client name & role  -->
              <div class="testimonials__name">
                <h3>Adnhika</h3>
                {{-- <p class="fw-light">Finance Manager</p> --}}
              </div>
            </div>     
            <!-- CAROUSEL ITEM 3 -->
            {{-- <div class="carousel-item">
              <!-- testimonials card  -->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!-- client picture  -->
              <div class="testimonials__picture">
                <img src="{{ asset('assets/images/testimonials/client-3.jpg') }}" alt="client-3 picture" class="rounded-circle img-fluid">
              </div>
              <!-- client name & role  -->
              <div class="testimonials__name">
                <h3>ClaireBelle Zawadi</h3>
                <p class="fw-light">Global brand manager</p>
              </div>
            </div>      --}}
            <!-- CAROUSEL ITEM 4 -->
            {{-- <div class="carousel-item">
              <!-- testimonials card  -->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!-- client picture  -->
              <div class="testimonials__picture">
                <img src="{{ asset('assets/images/testimonials/client-4.jpg') }}" alt="client-4 picture" class="rounded-circle img-fluid">
              </div>
              <!-- client name & role  -->
              <div class="testimonials__name">
                <h3>Uhuru Kenyatta</h3>
                <p class="fw-light">C.E.O & Founder</p>
              </div>
            </div>      --}}
          </div>
          <div class="text-center">
            <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          </button>
          <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          </button>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>
  
  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                         START SECTION 6 - THE FAQ 
  //////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <section id="faq" class="faq">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold text-uppercase">faq</h1>
        <div class="heading-line"></div>
        <p class="lead">frequently asked questions, kenali Microgreen sedikit lebih jauh</p>
      </div>
      <!-- ACCORDION CONTENT  -->
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="accordion" id="accordionExample">
            <!-- ACCORDION ITEM 1 -->
            <div class="accordion-item shadow mb-3">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Microgreen, apa itu ?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Microgreen</strong> merupakan sebutan untuk jenis tanaman-tanaman sayur yang sudah umum, tetapi jenis tanaman ini dipanen dan dikonsumsi saat masih sangat muda pada fase bibit.
                </div>
              </div>
            </div>
               <!-- ACCORDION ITEM 2 -->
            <div class="accordion-item shadow mb-3">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Apasih manfaat microgreen ?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Microgreen</strong> mengandung lebih banyak vitamin, mineral, dan beta-karoten dibandingkan sayuran itu sendiri, dan daun tanaman yang baru tumbuh  sangat kaya akan minyak nabati dan protein yang sudah habis digunakan pada sayuran dewasa
                </div>
              </div>
            </div>
               <!-- ACCORDION ITEM 3 -->
            <div class="accordion-item shadow mb-3">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Kenapa harus microgreen ?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Konsumsi microgreen ternyata dapat mengurangi risiko penyakit Alzheimer selain mencegah penyakit jantung. Kandungan polifenol di dalam sayuran ini adalah sumber manfaatnya. Memang, mengkonsumsi makanan yang kaya antioksidan dapat menurunkan risiko Alzheimer.
                </div>
              </div>
            </div>
               <!-- ACCORDION ITEM 4 -->
            <div class="accordion-item shadow mb-3">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Mau beli microgreen, tapi dimana ?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Buat kamu yang mau mulai mengkonsumsi microgreen, kamu bisa beli microgreen yang terjamin fresh hanya di store Ulam Pun Datang ya. Bisa offline, bisa online.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////
                                START SECTION 7 - THE PORTFOLIO  
  //////////////////////////////////////////////////////////////////////////////////////////////////////-->
  
  {{-- <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row text-center mt-5">
        <h1 class="display-3 fw-bold text-capitalize">Latest work</h1>
        <div class="heading-line"></div>
        <p class="lead">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint porro temporibus distinctio.
        </p>
      </div>
      <!-- FILTER BUTTONS  -->
      <div class="row mt-5 mb-4 g-3 text-center">
        <div class="col-md-12">
          <button class="btn btn-outline-theme" type="button">All</button>
          <button class="btn btn-outline-theme" type="button">websites</button>
          <button class="btn btn-outline-theme" type="button">design</button>
          <button class="btn btn-outline-theme" type="button">mockup</button>
        </div>
      </div>
  
      <!-- START THE PORTFOLIO ITEMS  -->
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="{{ asset('assets/images/portfolio/portfolio-1.jpg') }}" alt="portfolio 1 image" title="portfolio 1 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 1</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="{{ asset('assets/images/portfolio/portfolio-2.jpg') }}" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 2</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="{{ asset('assets/images/portfolio/portfolio-3.jpg') }}" alt="portfolio 3 image" title="portfolio 3 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 3</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="{{ asset('assets/images/portfolio/portfolio-4.jpg') }}" alt="portfolio 4 image" title="portfolio 4 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 4</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="{{ asset('assets/images/portfolio/portfolio-5.jpg') }}" alt="portfolio 5 image" title="portfolio 5 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 5</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="{{ asset('assets/images/portfolio/portfolio-6.jpg') }}" alt="portfolio 6 image" title="portfolio 6 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 6</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="{{ asset('assets/images/portfolio/portfolio-7.jpg') }}" alt="portfolio 7 image" title="portfolio 7 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 7</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="{{ asset('assets/images/portfolio/portfolio-8.jpg') }}" alt="portfolio 8 image" title="portfolio 8 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 8</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="{{ asset('assets/images/portfolio/portfolio-9.jpg') }}" alt="portfolio 9 image" title="portfolio 9 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 9</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  
  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////
                START SECTION 8 - GET STARTED  
  /////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <section id="contact" class="get-started">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold text-capitalize">PETIK EMAS</h1>
        <div class="heading-line"></div>
        <p class="lh-lg">
          Daftarin dirimu sekarang untuk mengikuti program ini
        </p>
      </div>
  
      <!-- START THE CTA CONTENT  -->
      <div class="row text-white">
        <div class="col-12 col-lg-6 gradient shadow p-3">
          <div class="cta-info w-100">
            <h3 class="display-3--brief">DAPATKAN HADIAH LOGAM MULIA TANPA DI UNDI
              DARI PEMBELIAN MICROGREEN DI
              ULAM PUN DATANG!</h3>
            {{-- <p class="lh-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam alias optio minima, tempore architecto sint ipsam dolore tempora facere laboriosam corrupti!
            </p> --}}
            {{-- <h3 class="display-3--brief">What will be the next step?</h3>
            <ul class="cta-info__list">
              <li>We'll prepare the proposal.</li>
              <li>we'll discuss it together.</li>
              <li>let's start the discussion.</li>
            </ul> --}}
            <img src="{{ asset('assets/images/home/petik_emas.png') }}" alt="video illutration" class="img-fluid img-portrait">
          </div>
        </div>
        <div class="col-12 col-lg-6 bg-white shadow p-3">
          <div class="form w-100 pb-2">
            <h4 class="display-3--title mb-5">Hubungi Kami</h4>
            <form action="#" class="row">
              <div class="col-lg-6 col-md mb-3">
                <input type="text" placeholder="First Name" id="inputFirstName" class="shadow form-control form-control-lg">
              </div>
              <div class="col-lg-6 col-md mb-3">
                <input type="text" placeholder="Last Name" id="inputLastName" class="shadow form-control form-control-lg">
              </div>
              <div class="col-lg-12 mb-3">
                <input type="email" placeholder="email address" id="inputEmail" class="shadow form-control form-control-lg">
              </div>
              <div class="col-lg-12 mb-3">
                <textarea name="message" placeholder="message" id="message" rows="8" class="shadow form-control form-control-lg"></textarea>
              </div>
              <div class="text-center d-grid mt-1">
                <button type="button" class="btn btn-theme rounded-pill pt-3 pb-3">
                  submit
                  <i class="fas fa-paper-plane"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
