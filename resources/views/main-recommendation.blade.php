@extends('master')
@section('main')
    <div class="album py-5">
        <div class="container">
            <h1 class="text-center">Recommended Hotels</h1>
                <span class="badge badge-danger mb-3 p-2">
                     {{ count($hotels) }} Hotels found
                </span>
          <div class="row">
              @foreach ($hotels as $hotel)
                  @include('partials.hotel-recom-main-card')
              @endforeach
          </div>
        </div>
    </div>
@endsection
