@extends('master')
@section('main')
    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
              @foreach ($hotels as $hotel)
                  <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
                      <div class="card-body">
                        <p class="card-text">
                            <h6>
                                <strong>Hotel City:</strong>
                                 {{ $hotel->City }}
                            </h6>
                            <h6>
                                <strong>Hotel Name:</strong>
                                 {{ $hotel->Hotel_Name }}
                            </h6>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
              @endforeach
              {{ $hotels->links() }}
          </div>
        </div>
    </div>    
@endsection
