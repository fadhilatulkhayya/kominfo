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
                                          <img src="{{ asset('template/dashboard') }}/images/logo-diskominfo.png"
                                              alt="">
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
                  <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
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
                                          <a href="#"><img
                                                  src="{{ asset('template/dashboard') }}/images/blog-post-02.jpg"
                                                  alt=""></a>
                                      </div>
                                      <div class="right-content">
                                          <span class="category">SEO Analysis</span>
                                          <span class="date">24 September 2021</span>
                                          <a href="#">
                                              <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                          </a>
                                          <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="post-item">
                                      <div class="thumb">
                                          <a href="#"><img
                                                  src="{{ asset('template/dashboard') }}/images/blog-post-03.jpg"
                                                  alt=""></a>
                                      </div>
                                      <div class="right-content">
                                          <span class="category">SEO Analysis</span>
                                          <span class="date">24 September 2021</span>
                                          <a href="#">
                                              <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                          </a>
                                          <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
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
                                          <a href="#"><img
                                                  src="{{ asset('template/dashboard') }}/images/blog-post-03.jpg"
                                                  alt=""></a>
                                      </div>
                                      <div class="right-content">
                                          <span class="category">SEO Analysis</span>
                                          <span class="date">24 September 2021</span>
                                          <a href="#">
                                              <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                          </a>
                                          <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="post-item last-post-item">
                                      <div class="thumb">
                                          <a href="#"><img
                                                  src="{{ asset('template/dashboard') }}/images/blog-post-04.jpg"
                                                  alt=""></a>
                                      </div>
                                      <div class="right-content">
                                          <span class="category">SEO Analysis</span>
                                          <span class="date">24 September 2021</span>
                                          <a href="#">
                                              <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                          </a>
                                          <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
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
                                                                              class="fa fa-check"></i> Perencanaan</span>
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
                                                                              class="fa fa-check"></i> Pemasangan</span>
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
                                                                              class="fa fa-check"></i> Berita Daerah</span>
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
          <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="loop owl-carousel">
                          <div class="item">
                              <a href="#">
                                  <div class="portfolio-item">
                                      <div class="thumb">
                                          <img src="{{ asset('template/dashboard') }}/images/portfolio-01.jpg"
                                              alt="">
                                      </div>
                                      <div class="down-content">
                                          <h4>Website Builder</h4>
                                          <span>Marketing</span>
                                      </div>
                                  </div>
                              </a>
                          </div>
                          <div class="item">
                              <a href="#">
                                  <div class="portfolio-item">
                                      <div class="thumb">
                                          <img src="{{ asset('template/dashboard') }}/images/portfolio-01.jpg"
                                              alt="">
                                      </div>
                                      <div class="down-content">
                                          <h4>Website Builder</h4>
                                          <span>Marketing</span>
                                      </div>
                                  </div>
                              </a>
                          </div>
                          <div class="item">
                              <a href="#">
                                  <div class="portfolio-item">
                                      <div class="thumb">
                                          <img src="{{ asset('template/dashboard') }}/images/portfolio-02.jpg"
                                              alt="">
                                      </div>
                                      <div class="down-content">
                                          <h4>Website Builder</h4>
                                          <span>Marketing</span>
                                      </div>
                                  </div>
                              </a>
                          </div>
                          <div class="item">
                              <a href="#">
                                  <div class="portfolio-item">
                                      <div class="thumb">
                                          <img src="{{ asset('template/dashboard') }}/images/portfolio-03.jpg"
                                              alt="">
                                      </div>
                                      <div class="down-content">
                                          <h4>Website Builder</h4>
                                          <span>Marketing</span>
                                      </div>
                                  </div>
                              </a>
                          </div>
                          <div class="item">
                              <a href="#">
                                  <div class="portfolio-item">
                                      <div class="thumb">
                                          <img src="{{ asset('template/dashboard') }}/images/portfolio-04.jpg"
                                              alt="">
                                      </div>
                                      <div class="down-content">
                                          <h4>Website Builder</h4>
                                          <span>Marketing</span>
                                      </div>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div id="contact" class="contact-us section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                      <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                          <h6>Kontak</h6>
                          <h4>Kontak Kami</h4>
                          <div class="line-dec"></div>
                      </div>
                  </div>
                  <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                      <form id="contact" action="" method="post">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="contact-dec">
                                      <img src="{{ asset('template/dashboard') }}/images/contact-dec-v3.png"
                                          alt="">
                                  </div>
                              </div>
                              <div class="col-lg-5">
                                  <div id="map">
                                      {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d821.7428144626006!2d123.14586857839767!3d0.5566138340711226!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327ed46cda596ebd%3A0x77dce7688fbca67b!2sDinas%20Komunikasi%20dan%20Informatika%20Kabupaten%20Bone%20Bolango!5e0!3m2!1sen!2sid!4v1677577070465!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                      <iframe
                                          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d821.7428144626006!2d123.14586857839767!3d0.5566138340711226!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327ed46cda596ebd%3A0x77dce7688fbca67b!2sDinas%20Komunikasi%20dan%20Informatika%20Kabupaten%20Bone%20Bolango!5e0!3m2!1sen!2sid!4v1677577070465!5m2!1sen!2sid"
                                          width="100%" height="636px" frameborder="0" style="border:0"
                                          allowfullscreen></iframe>
                                  </div>
                              </div>
                              <div class="col-lg-7">
                                  <div class="fill-form">
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <div class="info-post">
                                                  <div class="icon">
                                                      <img src="{{ asset('template/dashboard') }}/images/phone-icon.png"
                                                          alt="">
                                                      <a href="#">010-020-0340</a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-6">
                                              <div class="info-post">
                                                  <div class="icon">
                                                      <img src="{{ asset('template/dashboard') }}/images/email-icon.png"
                                                          alt="">
                                                      <a href="#">kominfo@bonebolangokab.go.id</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  @endsection
