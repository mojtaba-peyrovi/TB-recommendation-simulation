<style media="screen">
    .related-hotels {
        font-size: 12px;
    }
</style>
<div class="col-md-3">
  <div class="card related-hotels mb-4 shadow-sm bg-light">
      <div class="card-header bg-warning text-white">
          {{ str_limit($hotel->hotel_name, $limit=20, $end='...') }}
      </div>
    <div class="card-body ml-2">
      <p class="card-text">
          <div class="row">
              <div class="mr-5">
                  <div>
                      <strong>Hotel City:</strong>
                      {{ $hotel->city }}
                  </div>
                  <div>
                      <strong>Revenue:</strong>
                      {{ $hotel->estimated_revenue }}
                  </div>
                  <div>
                      <strong>Stars:</strong>
                      {{ $hotel->stars}}
                  </div>
              </div>
              <div class="mr-5">
                  <div class="">
                      <div>
                          <strong>GBV:</strong>
                          {{ $hotel->GBV }}
                      </div>
                      <div>
                          <strong>RNS:</strong>
                          {{ $hotel->RNS }}
                      </div>
                  </div>
              </div>
              <div class="mr-5">
                  <div class="">
                      <div>
                          <strong>Bookings:</strong>
                          {{ $hotel->bookings }}
                      </div>
                      <div>
                          <strong>Distance</strong>
                          {{ $hotel->distance }}
                      </div>
                  </div>
              </div>
          </div>
      </p>
    </div>
  </div>
</div>
