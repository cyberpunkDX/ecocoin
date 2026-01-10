<footer class="footer bg-dark py-5 py-lg-11 py-xl-12">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 mb-8 mb-xl-0">
          <div class="d-flex flex-column gap-8 pe-xl-5">
            <h2 class="mb-0 text-white">incentivizing eco-friendly actions to build a sustainable future for all.</h2>
            <div class="d-flex flex-column gap-2">
              <a href="mailto:{{ env('APP_EMAIL') }}" target="_blank" class="link-hover hstack gap-3 text-white fs-5">
                <iconify-icon icon="lucide:arrow-up-right" class="fs-7 text-primary"></iconify-icon>
                {{ env('APP_EMAIL') }}
              </a>
              <a href="#" target="_blank"
                class="link-hover hstack gap-3 text-white fs-5">
                <iconify-icon icon="lucide:map-pin" class="fs-7 text-primary"></iconify-icon>
                {{ env('APP_ADDRESS') }}
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xl-2 mb-8 mb-xl-0">
          <ul class="footer-menu list-unstyled mb-0 d-flex flex-column gap-2">
            <li><a class="link-hover fs-5 text-white" href="/">Home</a></li>
            <li><a class="link-hover fs-5 text-white" href="about-us.html">About</a></li>
            <li><a class="link-hover fs-5 text-white" id="services" href="#how-it-works">How it Works</a></li>
            <li><a class="link-hover fs-5 text-white" href="activities.html">Activities</a></li>
            <li><a class="link-hover fs-5 text-white" href="terms">Terms of Use</a></li>
            <li><a class="link-hover fs-5 text-white" href="privacy-policy.html">Privacy Policy</a></li>
            <li><a class="link-hover fs-5 text-white" href="404.html">Error 404</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-xl-2 mb-8 mb-xl-0">
          <ul class="footer-menu list-unstyled mb-0 d-flex flex-column gap-2">
            <li><a class="link-hover fs-5 text-white" href="#!">Facebook</a></li>
            <li><a class="link-hover fs-5 text-white" href="#!">Instagram</a></li>
            <li><a class="link-hover fs-5 text-white" href="#!">Twitter</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-xl-3 mb-8 mb-xl-0">
          <p class="mb-0 text-white text-opacity-70 text-md-end">© {{ config('app.name') }} copyright 2025</p>
        </div>
      </div>
    </div>
  </footer>

  <div class="get-template hstack gap-2">
    <button class="btn bg-primary p-2 round-52 rounded-circle hstack justify-content-center flex-shrink-0"
      id="scrollToTopBtn">
      <iconify-icon icon="lucide:arrow-up" class="fs-7 text-dark"></iconify-icon>
    </button>
  </div>