@extends('master')
@section('main')
    <div class="container">
        <h1>Top Searches:</h1>
        <h6> {{ $hotels->count() }} Hotels found</h6>
        <p>Top Searched hotels in <span class="text-success font-weight-bold">{{ $city }}</span></p>
        <div class="row">
            @foreach ($hotels as $hotel)
                 @include('partials.hotel-card')
            @endforeach

        </div>
    </div>
@endsection
