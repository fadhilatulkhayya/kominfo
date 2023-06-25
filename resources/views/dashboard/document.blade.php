  @extends('dashboard')
  @section('title', 'Dokumen')
  @section('menuDocument', 'active')

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
                                          <h4>Dokumen</h4>
                                          <div class="line-dec"></div>
                                      </div>
                                  </div>
                                  <div class="col-lg-12">
                                      <div class="card">
                                          <div class="card-body">
                                              <table class='table table-striped' id="table1">
                                                  <thead>
                                                      <tr>
                                                          <th>No</th>
                                                          <th>Nama</th>
                                                          <th>Download</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      @forelse($documents as $document)
                                                          <tr>
                                                              <td>{{ $loop->iteration }}</td>
                                                              <td>{{ $document->name }}</td>
                                                              <td><a class="btn btn-primary"
                                                                      href="{{ url('storage/upload/document/' . $document->file) }}"
                                                                      role="button" download><i class="fa fa-download"></i>
                                                                      Download</a>
                                                              </td>
                                                          </tr>
                                                      @empty
                                                          <tr>
                                                              <td colspan="4" class="text-center">Maaf, belum ada data
                                                              </td>
                                                          </tr>
                                                      @endforelse
                                                  </tbody>
                                              </table>
                                          </div>
                                      </div>
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

  @push('script')
      <script>
          $(document).ready(function() {
              $('#table1').DataTable({
                  scrollCollapse: true,
              });

          });
      </script>
  @endpush
