@extends('master')
@section('main')
    <div class="container">
        <div class="col-md-12 p-0">
          @include('partials.hotel-recom-show-card')
        </div>
        <h3 class="mt-5">Related Hotels:</h3>
        <div class="row">
            @foreach ($hotels as $hotel)
                @include('partials.related-hotels')
            @endforeach
        </div>
    </div>
@endsection
