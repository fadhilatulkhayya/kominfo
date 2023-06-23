  @extends('dashboard')
  @section('title', 'Struktur Organisasi')
  @section('menuProfil', 'active')

  @section('content')
      <div id="blog" class="blog">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="section-heading">
                          <h4>Struktur Organisasi</h4>
                          <div class="line-dec"></div>
                      </div>
                  </div>
                  <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="blog-posts">
                          <div class="row">
                              <div class="col-lg-12">
                                  @forelse ($strukturOrganisasis as $strukturOrganisasi)
                                      <div class="text-center">
                                          <img src="{{ asset('storage/upload/profile/' . $strukturOrganisasi->gambar) }}"
                                              style="width:60%" alt="struktur_organisasi" />
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
