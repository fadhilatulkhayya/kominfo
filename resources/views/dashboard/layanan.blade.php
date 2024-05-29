  @extends('dashboard')
  @section('title', 'Layanan')
  @section('menuLayanan', 'active')

  @section('content')
      <div id="portfolio" class="our-portfolio section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-5">
                      <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
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
                                                  PlayGround
                                              </div>
                                          </div>
                                          <div>
                                              <div class="thumb">
                                                  <span class="icon"><img
                                                          src="{{ asset('template/dashboard') }}/images/service-icon-02.png"
                                                          alt=""></span>
                                                  VR Simulation
                                              </div>
                                          </div>
                                          <div>
                                              <div class="thumb">
                                                  <span class="icon"><img
                                                          src="{{ asset('template/dashboard') }}/images/service-icon-03.png"
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
                                                                  <h4>PLAYGROUND</h4>
                                                                  <p>Playground dirancang dengan mempertimbangkan aspek keamanan untuk mencegah cedera saat bermain.
                                                                    Material yang digunakan biasanya ramah anak dan lantainya sering kali dilapisi dengan bahan yang empuk untuk mengurangi risiko cedera saat jatuh.
                                                                    Playground tidak hanya menyediakan sarana untuk bermain tetapi juga menjadi tempat anak-anak belajar berinteraksi, berbagi, dan bekerja sama dengan teman sebaya.
                                                                    Ini adalah lingkungan yang mendukung perkembangan fisik, emosional, dan sosial anak-anak melalui permainan yang menyenangkan dan edukatif.</p>
                                                                  <div class="ticks-list"><span><i class="fa fa-check"></i>
                                                                          Ayunan</span>
                                                                      <span><i class="fa fa-check"></i>
                                                                          Perosotan</span> <span><i class="fa fa-check"></i>
                                                                          Climbing Structures</span>
                                                                      <span><i class="fa fa-check"></i> Kotak Pasir</span>
                                                                      <span><i class="fa fa-check"></i> Rumah Pohon Mini</span>
                                                                      <span><i class="fa fa-check"></i> car City</span>
                                                                  </div>

                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="right-image">
                                                                <img src="{{ asset('img/playground.jpg')}}" alt="">
                                                                      alt="">
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
                                                                  <h4>VR SIMULATION</h4>
                                                                  <p>VR Simulation merupakan sebuah teknologi yang menciptakan pengalaman interaktif
                                                                    dan impresif bagi pengguna di dalam lingkungan simulasi. dalam dunia virtual
                                                                    yang diciptakan, pengguna dapat merasakan dan ber-interaksi dengan objek-objek
                                                                    serta lingkungan 3D yang terlihat dan terdengar seperti dunia nyata.
                                                                  </p>
                                                                  <div class="ticks-list"><span><i class="fa fa-check"></i>
                                                                          Dungeons of Eternity</span>
                                                                      <span><i class="fa fa-check"></i>
                                                                          Arizona Sunshine</span> <span><i
                                                                              class="fa fa-check"></i> Asgard's Wrath</span>
                                                                      <span><i class="fa fa-check"></i> Assasin's Creed Nexus</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="right-image">
                                                                <img src="{{ asset('img/vr.jpg')}}" alt="">
                                                                      alt="">
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
                                                                  <h4>RAINBOWSLIDE</h4>
                                                                  <p>Rainbowslide adalah perosotan terbesar yang ada di indramayu
                                                                    dengan ketinggian 10 meter dan panjang 25 meter dengan alas berwarna-warni
                                                                  </p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="right-image">
                                                                <img src="{{ asset('img/rainbow.jpg')}}" alt="">
                                                                      alt="">
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
  @endsection
