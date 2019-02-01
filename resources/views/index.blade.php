@extends('master')
@section('main')
    <div class="album py-5 bg-light">
        <div class="container">
            <h1>All Hotels:</h1>
            <h6> {{ $hotels->total() }} Hotels found, sorted by GBV</h6>
          <div class="row">
              @foreach ($hotels as $hotel)
                  @include('partials.hotel-card')
              @endforeach
              {{ $hotels->links() }}
          </div>
        </div>
    </div>
@endsection
