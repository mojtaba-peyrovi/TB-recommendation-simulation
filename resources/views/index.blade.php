@extends('master')
@section('main')
    <div class="album py-5">
        <div class="container">
            <h1 class="text-center">All Hotels</h1>
            <p class="text-center">These hotels are all the hotels having at least one active booking during the last 30 days sorted by GBV</p>

                <span class="badge badge-danger mb-3 p-2">
                     {{ $hotels->total() }} Hotels found
                </span>

          <div class="row" style="width:100%;">
              @foreach ($hotels as $hotel)
                  @include('partials.all-hotels-card')
              @endforeach
              {{ $hotels->links() }}
          </div>
        </div>
    </div>
@endsection
