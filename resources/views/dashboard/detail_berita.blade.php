  @extends('dashboard')
  @section('title', 'Detail Berita')


  @section('content')
      <div id="blog" class="blog">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="section-heading">
                          <h6>Informasi Publik</h6>
                          <h4>Detail Berita</h4>
                          <div class="line-dec"></div>
                      </div>
                  </div>
                  <div class="col-lg-8 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="container-fluid py-3">
                          <div class="container">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <!-- News Detail Start -->
                                      <div class="position-relative mb-3">
                                          <img class="img-fluid w-100" src="{{ $article['thumbnail'] }}"
                                              style="object-fit: cover;">
                                          <div class="overlay position-relative bg-light">
                                              <div class="mb-3">
                                                  <p>by {{ $article['author'] }}</p>
                                                  <a href="">{{ $article['category'] }}</a>
                                                  <span class="px-1">/</span>
                                                  <span>{{ $article['published_at'] }}</span>
                                              </div>
                                              <div>
                                                  <h3 class="mb-3">{{ $article['title'] }}</h3>
                                                  {!! $article['body'] !!}
                                              </div>
                                          </div>
                                      </div>
                                      <!-- News Detail End -->

                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 pt-3 pt-lg-0">
                      <div class="container-fluid py-3">
                          <div class="container">
                              <!-- Popular News Start -->
                              <div class="pb-3">
                                  <div class="bg-light py-2 px-4 mb-3">
                                      <h3 class="m-0">Tranding</h3>
                                  </div>
                                  <div class="d-flex mb-3">
                                      <a href="{{ route('detailBerita', $articles['data'][0]['slug']) }}"><img
                                              src="{{ $articles['data'][0]['thumbnail'] }}" alt=""
                                              style="width: 100px; height:
                                      100px; object-fit: cover;"></a>
                                      <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                          style="height: 100px;">
                                          <div class="mb-1" style="font-size: 13px;">
                                              <a href="">{{ $articles['data'][0]['category'] }}</a>
                                              <span class="px-1">/</span>
                                              <span>{{ $articles['data'][0]['published_at'] }}</span>
                                          </div>
                                          <a class="h6 m-0"
                                              href="">{{ Str::limit($articles['data'][0]['title'], 55, '....') }}</a>
                                      </div>
                                  </div>
                                  <div class="d-flex mb-3">
                                      <a href="{{ route('detailBerita', $articles['data'][1]['slug']) }}"><img
                                              src="{{ $articles['data'][1]['thumbnail'] }}" alt=""
                                              style="width: 100px; height:
                                      100px; object-fit: cover;"></a>
                                      <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                          style="height: 100px;">
                                          <div class="mb-1" style="font-size: 13px;">
                                              <a href="">{{ $articles['data'][1]['category'] }}</a>
                                              <span class="px-1">/</span>
                                              <span>{{ $articles['data'][1]['published_at'] }}</span>
                                          </div>
                                          <a class="h6 m-0"
                                              href="">{{ Str::limit($articles['data'][1]['title'], 55, '....') }}</a>
                                      </div>
                                  </div>
                                  <div class="d-flex mb-3">
                                      <a href="{{ route('detailBerita', $articles['data'][2]['slug']) }}"><img
                                              src="{{ $articles['data'][2]['thumbnail'] }}" alt=""
                                              style="width: 100px; height:
                                      100px; object-fit: cover;"></a>
                                      <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                          style="height: 100px;">
                                          <div class="mb-1" style="font-size: 13px;">
                                              <a href="">{{ $articles['data'][2]['category'] }}</a>
                                              <span class="px-1">/</span>
                                              <span>{{ $articles['data'][2]['published_at'] }}</span>
                                          </div>
                                          <a class="h6 m-0"
                                              href="">{{ Str::limit($articles['data'][2]['title'], 55, '....') }}</a>
                                      </div>
                                  </div>
                                  <div class="d-flex mb-3">
                                      <a href="{{ route('detailBerita', $articles['data'][3]['slug']) }}"><img
                                              src="{{ $articles['data'][3]['thumbnail'] }}" alt=""
                                              style="width: 100px; height:
                                      100px; object-fit: cover;"></a>
                                      <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                          style="height: 100px;">
                                          <div class="mb-1" style="font-size: 13px;">
                                              <a href="">{{ $articles['data'][3]['category'] }}</a>
                                              <span class="px-1">/</span>
                                              <span>{{ $articles['data'][3]['published_at'] }}</span>
                                          </div>
                                          <a class="h6 m-0"
                                              href="">{{ Str::limit($articles['data'][3]['title'], 55, '....') }}</a>
                                      </div>
                                  </div>
                                  <div class="d-flex mb-3">
                                      <a href="{{ route('detailBerita', $articles['data'][4]['slug']) }}"><img
                                              src="{{ $articles['data'][4]['thumbnail'] }}" alt=""
                                              style="width: 100px; height:
                                      100px; object-fit: cover;"></a>
                                      <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                          style="height: 100px;">
                                          <div class="mb-1" style="font-size: 13px;">
                                              <a href="">{{ $articles['data'][4]['category'] }}</a>
                                              <span class="px-1">/</span>
                                              <span>{{ $articles['data'][4]['published_at'] }}</span>
                                          </div>
                                          <a class="h6 m-0"
                                              href="">{{ Str::limit($articles['data'][4]['title'], 55, '....') }}</a>
                                      </div>
                                  </div>
                              </div>
                              <!-- Popular News End -->

                              <div class="pb-3">
                                  <div class="bg-light py-2 px-4 mb-3">
                                      <h3 class="m-0">Tags</h3>
                                  </div>
                                  <div class="d-flex flex-wrap m-n1">
                                      <a href="#"
                                          class="btn btn-sm btn-outline-secondary m-1">{{ $articles['data'][0]['tag'][0] }}</a>
                                      <a href="#" class="btn btn-sm btn-outline-secondary m-1">{{ $articles['data'][1]['tag'][0] }}</a>
                                      <a href="#" class="btn btn-sm btn-outline-secondary m-1">{{ $articles['data'][2]['tag'][0] }}</a>
                                      <a href="#" class="btn btn-sm btn-outline-secondary m-1">{{ $articles['data'][3]['tag'][0] }}</a>
                                      <a href="#" class="btn btn-sm btn-outline-secondary m-1">{{ $articles['data'][4]['tag'][0] }}</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  @endsection
