  @extends('dashboard')
  @section('title', 'Kepala Dinas')
  @section('menuProfil', 'active')

  @section('content')
      <div id="blog" class="blog">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="section-heading">
                          <h6>Sambutan</h6>
                          <h4>Kepala Dinas</h4>
                          <div class="line-dec"></div>
                      </div>
                  </div>
                  <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="blog-posts">
                          <div class="row">
                              <div class="col-md-12">
                                  @forelse ($kepaladinas as $kepaladina)
                                      <div class="row">
                                          <div class="col-md-3">
                                              <img src="{{ asset('storage/upload/profile/' . $kepaladina->photo) }}"
                                                  class="rounded" style="object-fit: cover" alt="kepala_dinas" />
                                          </div>
                                          <div class="col-md-9">
                                              {!! $kepaladina->sambutan !!}
                                          </div>
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
