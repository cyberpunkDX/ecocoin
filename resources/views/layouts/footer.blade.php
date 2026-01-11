<style>
  .footer-animated {
    position: relative;
    overflow: hidden;
  }
  .footer-animated::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #27ae60, #2ecc71, #27ae60);
    background-size: 200% 100%;
    animation: gradientMove 3s ease infinite;
  }
  @keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }
  .footer-link {
    position: relative;
    transition: all 0.3s ease;
    padding-left: 0;
  }
  .footer-link::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 0;
    height: 2px;
    background: #2ecc71;
    transition: width 0.3s ease;
  }
  .footer-link:hover {
    padding-left: 15px;
    color: #2ecc71 !important;
  }
  .footer-link:hover::before {
    width: 10px;
  }
  .social-icon {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.2);
  }
  .social-icon:hover {
    background: #2ecc71;
    transform: translateY(-5px);
    border-color: #2ecc71;
  }
  .social-icon:hover iconify-icon {
    color: #000 !important;
  }
  .footer-leaf {
    position: absolute;
    opacity: 0.05;
    animation: floatLeaf 6s ease-in-out infinite;
  }
  .footer-leaf-1 {
    top: 20%;
    right: 10%;
    animation-delay: 0s;
  }
  .footer-leaf-2 {
    bottom: 30%;
    left: 5%;
    animation-delay: 2s;
  }
  .footer-leaf-3 {
    top: 50%;
    right: 25%;
    animation-delay: 4s;
  }
  @keyframes floatLeaf {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(10deg); }
  }
  .newsletter-input {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: white;
    transition: all 0.3s ease;
  }
  .newsletter-input:focus {
    background: rgba(255, 255, 255, 0.15);
    border-color: #2ecc71;
    box-shadow: 0 0 0 3px rgba(46, 204, 113, 0.2);
    color: white;
  }
  .newsletter-input::placeholder {
    color: rgba(255, 255, 255, 0.5);
  }
  .btn-glow {
    position: relative;
    overflow: hidden;
  }
  .btn-glow::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
    transform: rotate(45deg);
    animation: btnGlow 3s ease infinite;
  }
  @keyframes btnGlow {
    0% { left: -50%; }
    100% { left: 150%; }
  }
  .pulse-dot {
    width: 8px;
    height: 8px;
    background: #2ecc71;
    border-radius: 50%;
    animation: pulse 2s ease infinite;
  }
  @keyframes pulse {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.5); opacity: 0.5; }
  }
</style>

<footer class="footer footer-animated bg-dark py-5 py-lg-11 py-xl-12">
    <!-- Floating Leaves Background -->
    <img src="{{ asset('home/images/svgs/primary-leaf.svg') }}" alt="" class="footer-leaf footer-leaf-1" width="100">
    <img src="{{ asset('home/images/svgs/secondary-leaf.svg') }}" alt="" class="footer-leaf footer-leaf-2" width="80">
    <img src="{{ asset('home/images/svgs/primary-leaf.svg') }}" alt="" class="footer-leaf footer-leaf-3" width="60">

    <div class="container position-relative z-1">
      <div class="row">
        <!-- Brand & Contact -->
        <div class="col-lg-4 mb-8 mb-lg-0">
          <div class="d-flex flex-column gap-5">
            <div>
              <a href="/" class="d-inline-block mb-4">
                <img src="{{ config('app.logo-dark') }}" alt="{{ config('app.name') }}" height="40">
              </a>
              <p class="text-white text-opacity-70 mb-0">
                Incentivizing eco-friendly actions to build a sustainable future for all. Join our community of changemakers today.
              </p>
            </div>
            <div class="d-flex flex-column gap-3">
              <a href="mailto:{{ env('APP_EMAIL') }}" class="hstack gap-3 text-white text-decoration-none footer-link">
                <iconify-icon icon="lucide:mail" class="fs-5 text-primary"></iconify-icon>
                <span>{{ env('APP_EMAIL') }}</span>
              </a>
              <div class="hstack gap-3 text-white text-opacity-70">
                <iconify-icon icon="lucide:map-pin" class="fs-5 text-primary"></iconify-icon>
                <span>{{ config('APP_ADDRESS') }}</span>
              </div>
              <div class="hstack gap-2 text-white text-opacity-70">
                <div class="pulse-dot"></div>
                <small>Available 24/7 for support</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="col-6 col-md-4 col-lg-2 mb-8 mb-lg-0">
          <h6 class="text-primary mb-4 fw-bold text-uppercase" data-aos="fade-up">Quick Links</h6>
          <ul class="list-unstyled mb-0 d-flex flex-column gap-3">
            <li data-aos="fade-up" data-aos-delay="100">
              <a class="footer-link text-white text-decoration-none" href="/">Home</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="150">
              <a class="footer-link text-white text-decoration-none" href="/about">About Us</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a class="footer-link text-white text-decoration-none" href="/contact">Contact</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="250">
              <a class="footer-link text-white text-decoration-none" href="{{ route('login') }}">Sign In</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <a class="footer-link text-white text-decoration-none" href="{{ route('register') }}">Get Started</a>
            </li>
          </ul>
        </div>

        <!-- Legal -->
        <div class="col-6 col-md-4 col-lg-2 mb-8 mb-lg-0">
          <h6 class="text-primary mb-4 fw-bold text-uppercase" data-aos="fade-up">Legal</h6>
          <ul class="list-unstyled mb-0 d-flex flex-column gap-3">
            <li data-aos="fade-up" data-aos-delay="100">
              <a class="footer-link text-white text-decoration-none" href="/terms">Terms of Use</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="150">
              <a class="footer-link text-white text-decoration-none" href="/privacy">Privacy Policy</a>
            </li>
          </ul>
        </div>

        <!-- Newsletter & Social -->
        <div class="col-md-4 col-lg-4">
          <h6 class="text-primary mb-4 fw-bold text-uppercase" data-aos="fade-up">Stay Connected</h6>
          <p class="text-white text-opacity-70 mb-4" data-aos="fade-up" data-aos-delay="100">
            Subscribe to our newsletter for eco tips and updates.
          </p>
          <form class="mb-5" data-aos="fade-up" data-aos-delay="150">
            <div class="input-group">
              <input type="email" class="form-control newsletter-input py-3" placeholder="Enter your email">
              <button class="btn btn-primary btn-glow px-4" type="submit">
                <iconify-icon icon="lucide:send" class="fs-5"></iconify-icon>
              </button>
            </div>
          </form>

          <div data-aos="fade-up" data-aos-delay="200">
            <p class="text-white text-opacity-50 small mb-3">Follow us on social media</p>
            <div class="d-flex gap-3">
              <a href="#" class="social-icon text-decoration-none">
                <iconify-icon icon="lucide:facebook" class="fs-5 text-white"></iconify-icon>
              </a>
              <a href="#" class="social-icon text-decoration-none">
                <iconify-icon icon="lucide:instagram" class="fs-5 text-white"></iconify-icon>
              </a>
              <a href="#" class="social-icon text-decoration-none">
                <iconify-icon icon="lucide:twitter" class="fs-5 text-white"></iconify-icon>
              </a>
              <a href="#" class="social-icon text-decoration-none">
                <iconify-icon icon="lucide:linkedin" class="fs-5 text-white"></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="border-top border-white border-opacity-10 mt-8 pt-5">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <p class="mb-0 text-white text-opacity-50 small">
              &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </p>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <div class="d-inline-flex align-items-center gap-2 text-white text-opacity-50 small">
              <iconify-icon icon="lucide:leaf" class="text-primary"></iconify-icon>
              <span>Made with love for our planet</span>
              <iconify-icon icon="lucide:heart" class="text-danger"></iconify-icon>
            </div>
          </div>
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
