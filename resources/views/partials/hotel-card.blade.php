<div class="col-md-12">
  <div class="card mb-4 shadow-sm bg-light">
    <div class="card-body ml-5">
      <p class="card-text">
          <h6 class="text-danger text-center mb-5">
               {{ $hotel->hotel_name }}
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
      <div class="float-right">
          <a href="/hotels/{{ $hotel->id }}" class="btn btn-outline-success">View Hotel</a>
      </div>
    </div>
  </div>
</div>
