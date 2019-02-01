<style media="screen">
    .related-hotels {
        font-size: 12px;
    }
</style>
<div class="col-md-3">
  <div class="card related-hotels mb-4 shadow-sm bg-light">
    <div class="card-body ml-2">
      <p class="card-text">
          <h6 class="text-success text-left mb-5">
               <a href="/hotels/{{ $hotel->id }}" class="text-success">{{ $hotel->hotel_name }}</a>
          </h6>
          <div class="row">
              <div class="mr-5">
                  <div>
                      <strong>Hotel City:</strong>
                      {{ $hotel->city }}
                  </div>
                  <div>
                      <strong>Searches:</strong>
                      {{ $hotel->searches }}
                  </div>
              </div>
              <div class="mr-5">
                  <div class="">
                      <div>
                          <strong>GBV:</strong>
                          {{ $hotel->gbv }}
                      </div>
                      <div>
                          <strong>RNS:</strong>
                          {{ $hotel->rns }}
                      </div>
                  </div>
              </div>
              <div class="mr-5">
                  <div class="">
                      <div>
                          <strong>Orders:</strong>
                          {{ $hotel->orders }}
                      </div>
                      <div>
                          <strong>TripAdvisor Score:</strong>
                          {{ $hotel->ta_score }}
                      </div>
                  </div>
              </div>
          </div>
      </p>
    </div>
  </div>
</div>
