  @extends('dashboard')
  @section('title', 'Visi & Misi')
  @section('menuProfil', 'active')

  @section('content')
      <div id="blog" class="blog">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="section-heading">
                          <h4>Visi & Misi</h4>
                          <div class="line-dec"></div>
                      </div>
                  </div>
                  <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="blog-posts">
                          <div class="row">
                              <div class="col-lg-12">
                                  @forelse ($visimisis as $visimisi)
                                      <div class="mb-5 text-center">
                                          <h4>Visi</h4>
                                          {{ $visimisi->visi }}
                                      </div>
                                      <div class=" text-center">
                                          <h4>Misi</h4>
                                          {{ $visimisi->misi }}
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
