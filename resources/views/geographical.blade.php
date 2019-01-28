@extends('master')
@section('main')

        <div class="container">
            <h3>Geographical (Close Hotels)</h3>
            <div class="row">
                <div class="mt-4 col-md-4">
                    <p>
                        <strong>Latitude:</strong>
                            {{ $lat }}
                   </p>
                    <p><strong>
                        Longitude:
                    </strong>
                    {{ $lon }}
                    </p>
                </div>
                <div class="mt-4 col-md-4">
                    <p>
                        <strong>X:</strong>
                            {{ $x }}
                   </p>
                    <p><strong>
                        Y:
                    </strong>
                    {{ $y }}
                    </p>
                </div>
                <div class="mt-4 col-md-4">
                    <p>
                        <strong>Distance(KM):</strong>
                            {{ $d }}

                    </p>
                </div>
            </div>

            <hr>
          <div class="row">


          </div>
        </div>

@endsection
