<section class="banner_slider" style="max-height: 300px; overflow: hidden; border-radius: 15px;">
  <div class="container-xxl p-lg-0">
      <!-- Sliders -->
      <div class="home-slider slider-full">
          @if (get_setting('home_slider_images', null, "en") != null)
              <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-autoplay="true" data-infinite="true">
                  @php
                      $decoded_slider_images = json_decode(get_setting('home_slider_images', null, "en"), true);
                      $sliders = get_slider_images($decoded_slider_images);
                      $home_slider_links = get_setting('home_slider_links', null, "en");
                  @endphp
                  @foreach ($sliders as $key => $slider)
                      <div class="carousel-box">
                          <a href="{{ isset(json_decode($home_slider_links, true)[$key]) ? json_decode($home_slider_links, true)[$key] : '' }}">
                              <!-- Image -->
                              <div class="d-block mw-100 img-fit overflow-hidden h-100">
                                  <img class="img-fit h-100 w-100 m-auto has-transition ls-is-cached lazyloaded"
                                       src="{{ $slider ? my_asset($slider->file_name) : static_asset('assets/img/placeholder.jpg') }}"
                                       alt="{{ env('APP_NAME') }} promo"
                                       onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';"
                                       style="object-fit: cover; max-height: 300px; border-radius: 10px;">
                              </div>
                          </a>
                      </div>
                  @endforeach
              </div>
          @endif
      </div>
  </div>
</section>
