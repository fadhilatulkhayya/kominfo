  @extends('dashboard')
  @section('title', 'Berita')
  @section('menuBerita', 'active')


  @section('content')
      <div id="blog" class="blog">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="section-heading">
                          <h6>Informasi Publik</h6>
                          <h4>Berita</h4>
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

  @endsection
