 <div style="width:100%;">
  <div class="card mb-4 shadow-sm bg-light">
      <div class="card-header bg-info text-white">
          {{ $hotel->hotel_name }}
      </div>
    <div class="card-body">
        <div class="row mt-2">
            <div class="col-md-3 ml-2" id="single-img">
                <div style="margin-left:-16px;margin-top:10px;max-width:75%;" class="img-fluid;">
                </div>

                    <img src="https://q-ak.bstatic.com/xdata/images/hotel/square200/94841340.jpg?k=381a8beff2b08d8282e566c52667f11705f34be9826e34f8a274c05eac3a212f&o=" class="img-fluid" style="width:200px; height:auto;">
            </div>
            <div class="col-md-4" id="single-deal-main">
                    <div class="single-deal-address">
                        <span id="single-deal-city"><i class="fas fa-map-marker-alt"></i><strong>Hotel City:</strong><a href="#"> {{ $hotel->city }}</a></span><br>
                        <span id="single-deal-city-center"><i class="fas fa-map-signs"></i><strong>Stars:</strong> {{ $hotel->stars }}</span><br>
                        <span id="single-deal-city-center"><i class="fas fa-map-signs"></i><strong>Bookings last month:</strong> {{ $hotel->bookings }}</span><br>
                        <span id="single-deal-city-center"><i class="fas fa-map-signs"></i><strong>RNS last month:</strong> {{ $hotel->RNS }}</span><br>
                        <span id="single-deal-city-center"><i class="fas fa-map-signs"></i><strong>GBV last month:</strong> {{ $hotel->GBV }}</span><br>
                        <span id="single-deal-city-center"><i class="fas fa-map-signs"></i><strong>GBV / RNS last month:</strong> {{ $hotel->GBV_per_RNS }}</span><br>

                    </div>
                    <div class="great-value">
                        <span><i class="fas fa-bus"></i></span>
                        <span><i class="fas fa-utensils"></i></span>
                        <span><i class="fas fa-wifi"></i></span>
                    </div>

            </div>
            <div class="col-md-4">
                <div class="btn-group float-right ml-1" id="single-deal-reviews" >
                    <a href="/hotels/{{ $hotel->Hotel_ID }}" class="btn btn-warning text-white" style="margin-top:170px; margin-right:-70px;">View Hotel</a>
                </div>
            </div>
    </div>
  </div>
</div>
