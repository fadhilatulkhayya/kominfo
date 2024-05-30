  @extends('dashboard')
  @section('title', 'Beranda')
  @section('menuBeranda', 'active')


  @section('content')
      <div class="main-banner wow fadeIn " id="top" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">

                  </div>
                  <div class="col-lg-12">
                      <div class="row">
                          <div class="col-lg-6 align-self-center">
                              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                  data-wow-delay="1s">
                                  <div class="row">
                                      <div class="col-lg-12">
                                        <img src="{{ asset('img/logo.png')}}" alt=""
                                              style="margin-top: -100px;width:50%;" class="d-block mx-auto">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                  <h6>Destinasi Liburan Akhir Pekan</h6>
                                  <h2> KidsPark Indramayu</h2>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
{{--
      <div id="blog" class="blog">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 offset-lg-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="section-heading">
                          <h6>Informasi</h6>
                          <h4>Informasi Wahana</h4>
                          <div class="line-dec"></div>
                      </div>
                  </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="blog-posts">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="post-item">
                                      <div class="thumb">
                                          <a href="{{ $articles[0]['link'] }}"><img
                                                  src="{{ $articles[0]['yoast_head_json']['og_image'][0]['url'] }}"
                                                  alt=""></a>
                                      </div>
                                      <div class="right-content">
                                          <span class="category">{{ $categoryArticle[0]['name'] }}</span>
                                          <span
                                              class="date">{{ Carbon\Carbon::parse($articles[0]['date'])->format('F d Y') }}</span>
                                          <a href="{{ $articles[0]['link'] }}">
                                              <h4>{{ $articles[0]['title']['rendered'] }}</h4>
                                          </a>
                                          <p>{!! Str::limit($articles[0]['excerpt']['rendered'], 60, '...') !!}
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="post-item">
                                      <div class="thumb">
                                          <a href="{{ $articles[2]['link'] }}"><img
                                                  src="{{ $articles[2]['yoast_head_json']['og_image'][0]['url'] }}"
                                                  alt=""></a>
                                      </div>
                                      <div class="right-content">
                                          <span class="category">{{ $categoryArticle[2]['name'] }}</span>
                                          <span
                                              class="date">{{ Carbon\Carbon::parse($articles[2]['date'])->format('F d Y') }}</span>
                                          <a href="{{ $articles[2]['link'] }}">
                                              <h4>{{ $articles[2]['title']['rendered'] }}</h4>
                                          </a>
                                          <p>{!! Str::limit($articles[2]['excerpt']['rendered'], 60, '...') !!}
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="blog-posts">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="post-item">
                                      <div class="thumb">
                                          <a href="{{ $articles[1]['link'] }}"><img
                                                  src="{{ $articles[1]['yoast_head_json']['og_image'][0]['url'] }}"
                                                  alt=""></a>
                                      </div>
                                      <div class="right-content">
                                          <span class="category">{{ $categoryArticle[1]['name'] }}</span>
                                          <span
                                              class="date">{{ Carbon\Carbon::parse($articles[1]['date'])->format('F d Y') }}</span>
                                          <a href="{{ $articles[1]['link'] }}">
                                              <h4>{{ $articles[1]['title']['rendered'] }}</h4>
                                          </a>
                                          <p>{!! Str::limit($articles[1]['excerpt']['rendered'], 60, '...') !!}
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="post-item">
                                      <div class="thumb">
                                          <a href="{{ $articles[3]['link'] }}"><img
                                                  src="{{ $articles[3]['yoast_head_json']['og_image'][0]['url'] }}"
                                                  alt=""></a>
                                      </div>
                                      <div class="right-content">
                                          <span class="category">{{ $categoryArticle[3]['name'] }}</span>
                                          <span
                                              class="date">{{ Carbon\Carbon::parse($articles[3]['date'])->format('F d Y') }}</span>
                                          <a href="{{ $articles[3]['link'] }}">
                                              <h4>{{ $articles[3]['title']['rendered'] }}</h4>
                                          </a>
                                          <p>{!! Str::limit($articles[3]['excerpt']['rendered'], 60, '...') !!}
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div> --}}


      <div id="services" class="services section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="naccs">
                          <div class="grid">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="menu">
                                          <div class="first-thumb active">
                                              <div class="thumb">
                                                  <span class="icon"><img
                                                          src="{{ asset('template/dashboard') }}/images/service-icon-01.png"
                                                          alt=""></span>
                                                  Playground
                                              </div>
                                          </div>
                                          <div>
                                              <div class="thumb">
                                                  <span class="icon"><img
                                                          src="{{ asset('template/dashboard') }}/images/service-icon-02.png"
                                                          alt=""></span>
                                                 VR Simulator
                                              </div>
                                          </div>
                                          <div>
                                              <div class="thumb">
                                                  <span class="icon"><img
                                                          src="{{ asset('template/dashboard') }}/images/service-icon-01.png"
                                                          alt=""></span>
                                                  RainbowSlide
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-12">
                                      <ul class="nacc">
                                          <li class="active">
                                              <div>
                                                  <div class="thumb">
                                                      <div class="row">
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="left-text">
                                                                  <h4>PlayGround</h4>
                                                                  <p>playground dirancang dengan mempertimbangkan aspek keamanan untuk mencegah cedera saat bermain. Material yang digunakan biasanya ramah anak dan lantainya sering kali dilapisi dengan bahan yang empuk untuk mengurangi risiko cedera saat jatuh. Playground tidak hanya menyediakan sarana untuk bermain tetapi juga menjadi tempat anak-anak belajar berinteraksi, berbagi, dan bekerja sama dengan teman sebaya. Ini adalah lingkungan yang mendukung perkembangan fisik, emosional, dan sosial anak-anak melalui permainan yang menyenangkan dan edukatif.</p>
                                                                  <div class="ticks-list"><span><i
                                                                              class="fa fa-check"></i>
                                                                          Ayunan</span>
                                                                      <span><i class="fa fa-check"></i>
                                                                          Climbing</span> <span><i class="fa fa-check"></i>
                                                                          Mini Rumah Pohon</span>
                                                                      <span><i class="fa fa-check"></i> Kotak Pasir</span>
                                                                      <span><i class="fa fa-check"></i> Car City</span>
                                                                      <span><i class="fa fa-check"></i> Perosotan</span>
                                                                  </div>

                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="right-image">
                                                                <img src="{{ asset('img/playground.jpg')}}" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div>
                                                  <div class="thumb">
                                                      <div class="row">
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="left-text">
                                                                  <h4>VR Simulator</h4>
                                                                  <p>VR simulator adalah sebuah sistem atau perangkat yang menggunakan teknologi Virtual Reality (VR) untuk menciptakan pengalaman simulasi yang sangat mirip dengan kenyataan atau menciptakan lingkungan virtual yang sepenuhnya imersif. Dengan menggunakan headset VR dan kadang-kadang perangkat tambahan seperti kontroler atau sensor gerakan, pengguna dapat berinteraksi dengan dunia virtual seolah-olah mereka benar-benar berada di dalamnya.</p>
                                                                  <div class="ticks-list"><span><i
                                                                              class="fa fa-check"></i>
                                                                          Headset VR</span>
                                                                      <span><i class="fa fa-check"></i>
                                                                          Controller</span> <span><i
                                                                              class="fa fa-check"></i>Sensor Gerak</span>

                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="right-image">
                                                                <img src="{{ asset('img/vr.jpg')}}"alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div>
                                                  <div class="thumb">
                                                      <div class="row">
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="left-text">
                                                                  <h4>RainbowSlide</h4>
                                                                  <p>Rainbow Slide adalah sebuah perosotan yang memiliki desain warna-warni yang mencolok, menyerupai warna pelangi. Perosotan ini biasanya terbuat dari bahan plastik yang halus dan kuat, serta dirancang dengan berbagai ukuran dan panjang untuk memenuhi kebutuhan anak-anak dari berbagai usia. Bagian perosotan mungkin berbentuk lurus atau bergelombang untuk menambah keseruan.</p>

                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="right-image">
                                                                <img src="{{ asset('img/rainbow.jpg')}}"alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div id="portfolio" class="our-portfolio section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-5">
                      <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                          <h6>Layanan</h6>
                          <h4>Layanan Kami</h4>
                          <div class="line-dec"></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="loop owl-carousel">
                          @forelse ($services as $service)
                              <div class="item">
                                  <a href="https://{{ $service->url }}">
                                      <div class="portfolio-item">
                                          <div class="thumb">
                                              <img src="{{ asset('storage/upload/layanan/' . $service->thumbnail) }}"
                                                  alt="">
                                          </div>
                                          <div class="down-content">
                                              <h4>{{ $service->name }}</h4>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                          @empty
                              <h4>Maaf, belum ada data</h4>
                          @endforelse
                      </div>
                  </div>
              </div>
          </div>
      </div>


  @endsection
