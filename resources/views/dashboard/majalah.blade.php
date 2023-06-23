  @extends('dashboard')
  @section('title', 'E-Magazine')
  @section('menuEMagazine', 'active')

  @section('content')
      <div id="services" class="services section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="naccs">
                          <div class="grid">
                              <div class="row">
                                  <div class="col-lg-12 offset-lg-12  wow fadeInDown" data-wow-duration="1s"
                                      data-wow-delay="0.3s">
                                      <div class="section-heading">
                                          <h4>E-Magazine</h4>
                                          <div class="line-dec"></div>
                                      </div>
                                  </div>
                                  <div class="col-lg-12">
                                      <div class="row">
                                          @forelse ($majalahs as $majalah)
                                              <div class="col-lg-6">
                                                  <div class="position-relative mb-3">
                                                      <a href="{{ url('storage/upload/majalah/' . $majalah->file) }}"
                                                          target="_blank" class=""><img
                                                              src="{{ asset('storage/upload/majalah/' . $majalah->cover) }}"
                                                              class="img-thumbnail" width="200" height="200"
                                                              style="object-fit: cover" /></a>
                                                  </div>
                                              </div>
                                          @empty
                                              <h4>Maaf, belum ada data</h4>
                                          @endforelse
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-12">
                                          <nav aria-label="Page navigation">
                                              <ul class="pagination justify-content-center">
                                                  <li class="page-item disabled">
                                                      <a class="page-link" href="#" aria-label="Previous">
                                                          <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                                          <span class="sr-only">Previous</span>
                                                      </a>
                                                  </li>
                                                  <li class="page-item active"><a class="page-link" href="#">1</a>
                                                  </li>
                                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                  <li class="page-item">
                                                      <a class="page-link" href="#" aria-label="Next">
                                                          <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                                          <span class="sr-only">Next</span>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </nav>
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
