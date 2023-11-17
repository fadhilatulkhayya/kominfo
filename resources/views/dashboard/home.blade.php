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
                                          <img src="{{ asset('template/dashboard') }}/images/home.png" alt="home"
                                              style="margin-top: -100px;">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                  <h6>Pemerintah Kabupaten Bone Bolango</h6>
                                  <h2> DINAS KOMUNIKASI & INFORMATIKA</h2>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div id="blog" class="blog">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 offset-lg-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="section-heading">
                          <h6>Informasi</h6>
                          <h4>Informasi Publik</h4>
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
                                                  Web Development
                                              </div>
                                          </div>
                                          <div>
                                              <div class="thumb">
                                                  <span class="icon"><img
                                                          src="{{ asset('template/dashboard') }}/images/service-icon-02.png"
                                                          alt=""></span>
                                                  Network & CCTV
                                              </div>
                                          </div>
                                          <div>
                                              <div class="thumb">
                                                  <span class="icon"><img
                                                          src="{{ asset('template/dashboard') }}/images/service-icon-03.png"
                                                          alt=""></span>
                                                  Informasi Publik
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
                                                                  <h4>Web Development</h4>
                                                                  <p>Web development adalah proses membuat dan memelihara
                                                                      situs web. Hal ini melibatkan penggunaan bahasa
                                                                      pemrograman dan teknologi web untuk membuat halaman
                                                                      web yang dapat diakses melalui internet.</p>
                                                                  <div class="ticks-list"><span><i
                                                                              class="fa fa-check"></i>
                                                                          Perencanaan</span>
                                                                      <span><i class="fa fa-check"></i>
                                                                          Desain</span> <span><i class="fa fa-check"></i>
                                                                          Pengembangan</span>
                                                                      <span><i class="fa fa-check"></i> Uji Coba dan
                                                                          Debugging</span>
                                                                      <span><i class="fa fa-check"></i> Peluncuran</span>
                                                                      <span><i class="fa fa-check"></i> Pemeliharaan</span>
                                                                  </div>

                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="right-image">
                                                                  <img src="{{ asset('template/dashboard') }}/images/services-image.jpg"
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
                                                                  <h4>NETWORK & CCTV ENGINEER</h4>
                                                                  <p>CCTV (Closed Circuit Television) dan Networking
                                                                      Engineering adalah dua teknologi yang berkaitan erat
                                                                      dengan keamanan dan pemantauan, yang memiliki peran
                                                                      penting di era digital saat ini. CCTV digunakan untuk
                                                                      merekam gambar dan suara di suatu tempat atau lokasi
                                                                      tertentu, sedangkan Networking Engineering bertanggung
                                                                      jawab untuk mengelola jaringan komputer dan sistem
                                                                      informasi.</p>
                                                                  <div class="ticks-list"><span><i
                                                                              class="fa fa-check"></i>
                                                                          Pemasangan</span>
                                                                      <span><i class="fa fa-check"></i>
                                                                          Pemantauan</span> <span><i
                                                                              class="fa fa-check"></i> Pemeliharaan</span>
                                                                      <span><i class="fa fa-check"></i> Wifi Publik</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="right-image">
                                                                  <img src="{{ asset('template/dashboard') }}/images/services-image-02.jpg"
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
                                                                  <h4>Informasi Publik</h4>
                                                                  <p>Informasi publik adalah informasi yang dapat diakses
                                                                      dan digunakan oleh masyarakat secara umum. Informasi
                                                                      publik ini biasanya disediakan oleh pemerintah,
                                                                      lembaga publik, dan organisasi lainnya yang
                                                                      berhubungan dengan kepentingan umum. Dalam banyak
                                                                      negara, hak akses terhadap informasi publik dijamin
                                                                      oleh undang-undang, sehingga memungkinkan masyarakat
                                                                      untuk memperoleh informasi yang diperlukan</p>
                                                                  <div class="ticks-list"><span><i
                                                                              class="fa fa-check"></i>
                                                                          Berita Daerah</span>
                                                                      <span><i class="fa fa-check"></i> Berita
                                                                          Pemerintahan</span><span><i
                                                                              class="fa fa-check"></i>
                                                                          Data Statistik</span> <span><i
                                                                              class="fa fa-check"></i> Laporan
                                                                          Keuangan</span>
                                                                      <span><i class="fa fa-check"></i> Kebijakan
                                                                          Publik</span>

                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6 align-self-center">
                                                              <div class="right-image">
                                                                  <img src="{{ asset('template/dashboard') }}/images/services-image-03.jpg"
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
