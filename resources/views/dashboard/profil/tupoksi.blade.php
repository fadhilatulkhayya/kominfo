  @extends('dashboard')
  @section('title', 'Tugas Pokok & Fungsi')
  @section('menuProfil', 'active')

  @section('content')
      <div id="blog" class="blog">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="section-heading">
                          <h4>Tugas Pokok & Fungsi</h4>
                          <div class="line-dec"></div>
                      </div>
                  </div>
                  <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="blog-posts">
                          <div class="row">
                              <div class="col-lg-12">
                                  @forelse ($tupoksis as $tupoksi)
                                      {!! $tupoksi->isi_tupoksi !!}
                              </div>
                          @empty
                              Maaf, data belum ada
                              @endforelse
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
  @endsection
