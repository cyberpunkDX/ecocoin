@extends('layouts.master')
@section('content')

    <div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section position-relative d-flex align-items-end min-vh-100">
      <video class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" autoplay muted loop playsinline>
        <source src="home/images/backgrounds/eco-banner.mp4" type="video/mp4" />
      </video>
      <div class="container">
        <div class="d-flex flex-column gap-4 pb-8 position-relative z-1">
          <div class="row align-items-center">
            <div class="col-xl-6">
              <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <img src="home/images/svgs/primary-leaf.svg" alt="" class="img-fluid animate-spin">
                <p class="mb-0 text-white fs-5 text-opacity-70">Get rewarded for making a difference.
                    <span class="text-primary">Join the movement</span> of eco-warriors and start earning crypto for your green activities.</p>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <h1 class="mb-0 fs-16 text-white lh-1">Go Green, Earn Green</h1>
            <a href="/register" class="p-1 ps-7 bg-primary rounded-pill">
              <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--  Stats & Facts Section -->
    <section class="stats-facts py-5 py-lg-11 py-xl-12 position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                        <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">01</span>
                        <hr class="border-line">
                        <span class="badge text-bg-dark">Stats &amp; facts</span>
                    </div>
                </div>
            </div>
            <div class="row mt-9">
                <div class="col-md-4 mb-7 mb-md-0">
                    <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <h2 class="mb-0 fs-14"><span class="count" data-target="1000">1000</span>K+</h2>
                        <p class="mb-0">Community Members</p>
                    </div>
                </div>
                <div class="col-md-4 mb-7 mb-md-0">
                    <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <h2 class="mb-0 fs-14"><span class="count" data-target="500">500</span>+</h2>
                        <p class="mb-0">Eco-Activities</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2 class="mb-0 fs-14"><span class="count" data-target="10">10</span>M+</h2>
                        <p class="mb-0">{{ config('app.name') }}s Earned</p>
                    </div>
                </div>
            </div>
            <div class="row mt-9">
                <div class="col-12">
                    <a href="/about" class="btn" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                        <span class="btn-text">Learn More</span>
                        <iconify-icon icon="lucide:arrow-up-right" class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 start-0" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
            <img src="home/images/backgrounds/stats-facts-bg.svg" alt="" class="img-fluid">
        </div>
    </section>

    <!--  Featured Activities Section -->
    <section class="featured-projects py-5 py-lg-11 py-xl-12 bg-light-gray">
      <div class="d-flex flex-column gap-5 gap-xl-11">
        <div class="container">
          <div class="row gap-7 gap-xl-0">
            <div class="col-xl-4 col-xxl-4">
              <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                data-aos-duration="1000">
                <span
                  class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">02</span>
                <hr class="border-line">
                <span class="badge text-bg-dark">Featured Activities</span>
              </div>
            </div>
            <div class="col-xl-8 col-xxl-7">
              <div class="row">
                <div class="col-xxl-8">
                  <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <h2 class="mb-0">Discover Eco-Adventures</h2>
                    <p class="fs-5 mb-0">Check out some of the latest eco-friendly activities our community members have been sharing.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="featured-projects-slider px-3">
          <div class="owl-carousel owl-theme">
            @foreach($products as $product)
            <div class="item">
              <div class="portfolio d-flex flex-column gap-6">
                <div class="portfolio-img position-relative overflow-hidden">
                  <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
                  <div class="portfolio-overlay">
                    {{-- <a href="{{ route('products.show', $product) }}"
                      class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                      <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                    </a> --}}
                  </div>
                </div>
                <div class="portfolio-details d-flex flex-column gap-3">
                  <h3 class="mb-0">{{ $product->name }}</h3>
                  <div class="hstack gap-2">
                    <span class="badge text-dark border">{{ $product->category }}</span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <!--  How it Works Section -->
    <section class="services py-5 py-lg-11 py-xl-12 bg-dark" id="how-it-works">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-10">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">03</span>
                            <hr class="border-line bg-white">
                            <span class="badge text-dark bg-white">How it Works</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                    <h2 class="mb-0 text-white">A Simple Path to Green Rewards</h2>
                                    <p class="fs-5 mb-0 text-white text-opacity-70">Follow these simple steps to start earning {{ config('app.name') }}s for your eco-friendly actions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-tab">
                    <div class="row gap-5 gap-xl-0">
                        <div class="col-xl-4">
                            <div class="tab-content" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                                <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="one-tab" tabindex="0">
                                    <img src="home/images/services/sign-up.jpg" alt="services" class="img-fluid">
                                </div>
                                <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab" tabindex="0">
                                    <img src="home/images/services/upload-media.jpg" alt="services" class="img-fluid">
                                </div>
                                <div class="tab-pane" id="three" role="tabpanel" aria-labelledby="three-tab" tabindex="0">
                                    <img src="home/images/services/get-rewarded.jpg" alt="services" class="img-fluid">
                                </div>
                                <div class="tab-pane" id="four" role="tabpanel" aria-labelledby="four-tab" tabindex="0">
                                    <img src="home/images/services/use-{{ config('app.name') }}.jpg" alt="services" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="d-flex flex-column gap-5">
                                <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100" role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 active" id="one-tab" data-bs-toggle="tab" data-bs-target="#one" type="button" role="tab" aria-controls="one" aria-selected="true">1. Sign Up</button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-white text-opacity-70 mb-0">Join our community to begin your eco-journey.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100" role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0" id="two-tab" data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab" aria-controls="two" aria-selected="false">2. Share Your Action</button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-white text-opacity-70 mb-0">Upload a photo or video of your green activity.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100" role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0" id="three-tab" data-bs-toggle="tab" data-bs-target="#three" type="button" role="tab" aria-controls="three" aria-selected="false">3. Get Rewarded</button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-white text-opacity-70 mb-0">Earn {{ config('app.name') }}s for every verified activity.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100" role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0" id="four-tab" data-bs-toggle="tab" data-bs-target="#four" type="button" role="tab" aria-controls="four" aria-selected="false">4. Use Your Coins</button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-white text-opacity-70 mb-0">Redeem your earnings with our partners.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="/register" class="btn border border-white border-opacity-25" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                                    <span class="btn-text">Get Started</span>
                                    <iconify-icon icon="lucide:arrow-up-right" class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Why choose us Section -->
    <section class="why-choose-us py-5 py-lg-11 py-xl-12">
      <div class="container">
        <div class="row justify-content-between gap-5 gap-xl-0">
          <div class="col-xl-3 col-xxl-3">
            <div class="d-flex flex-column gap-7">
              <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                data-aos-duration="1000">
                <span
                  class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">04</span>
                <hr class="border-line">
                <span class="badge text-bg-dark">Why Choose {{ config('app.name') }}</span>
              </div>
              <h2 class="mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Why Choose {{ config('app.name') }}</h2>
              <p class="mb-0 fs-5" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">We blend technology with eco-consciousness to craft a unique digital experience that makes an impact.
                With a focus on innovation, attention to details.</p>
            </div>
          </div>
          <div class="col-xl-9 col-xxl-8">
            <div class="row">
              <div class="col-lg-4 mb-7 mb-lg-0">
                <div class="card position-relative overflow-hidden bg-primary h-100" data-aos="fade-up"
                  data-aos-delay="100" data-aos-duration="1000">
                  <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column gap-3 position-relative z-1">
                      <ul class="list-unstyled mb-0 hstack gap-1">
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                              class="fs-6 text-dark"></iconify-icon></a></li>
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                              class="fs-6 text-dark"></iconify-icon></a></li>
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                              class="fs-6 text-dark"></iconify-icon></a></li>
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                              class="fs-6 text-dark"></iconify-icon></a></li>
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                              class="fs-6 text-dark"></iconify-icon></a></li>
                      </ul>
                      <p class="mb-0 fs-6 text-dark">The team exceeded our expectations with a stunning platform.
                      </p>
                    </div>
                    <div class="position-relative z-1">
                      <div class="pb-6 border-bottom">
                        <h2 class="mb-0">98.6%</h2>
                        <p class="mb-0">User satisfaction</p>
                      </div>
                      <div class="hstack gap-6 pt-6">
                        <img src="home/images/profile/avatar-1.png" alt=""
                          class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="64" height="64">
                        <div>
                          <h5 class="mb-0">Wade Warren</h5>
                          <p class="mb-0">Eco Warrior</p>
                        </div>
                      </div>
                    </div>
                    <div class="position-absolute bottom-0 end-0">
                      <img src="home/images/backgrounds/customer-satisfaction-bg.svg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-7 mb-lg-0">
                <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                  <div class="position-relative">
                    <img src="home/images/about/about-img.jpg" alt="" class="img-fluid w-100">
                  </div>

                  <div class="card bg-dark">
                    <div class="card-body d-flex flex-column gap-7">
                      <div>
                        <h2 class="mb-0 text-white">5000+</h2>
                        <p class="mb-0 text-white text-opacity-70">Successful activities completed</p>
                      </div>
                      <ul class="d-flex align-items-center mb-0">
                        <li>
                          <a href="javascript:void(0)">
                            <img src="home/images/profile/user-1.jpg" width="44" height="44"
                              class="rounded-circle border border-2 border-dark" alt="user-1">
                          </a>
                        </li>
                        <li class="ms-n2">
                          <a href="javascript:void(0)">
                            <img src="home/images/profile/user-2.jpg" width="44" height="44"
                              class="rounded-circle border border-2 border-dark" alt="user-2">
                          </a>
                        </li>
                        <li class="ms-n2">
                          <a href="javascript:void(0)">
                            <img src="home/images/profile/user-3.jpg" width="44" height="44"
                              class="rounded-circle border border-2 border-dark" alt="user-3">
                          </a>
                        </li>
                        <li class="ms-n2">
                          <a href="javascript:void(0)">
                            <img src="home/images/profile/user-4.jpg" width="44" height="44"
                              class="rounded-circle border border-2 border-dark" alt="user-4">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-7 mb-lg-0">
                <div class="card border h-100 position-relative overflow-hidden" data-aos="fade-up" data-aos-delay="300"
                  data-aos-duration="1000">
                  <span
                    class="border rounded-circle round-490 d-block position-absolute top-0 start-50 translate-middle"></span>
                  <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                      <h2 class="mb-0">100+</h2>
                      <p class="mb-0 text-dark">Partners worldwide</p>
                    </div>
                    <div class="d-flex flex-column gap-3">
                      <a href="/" class="logo-dark">
                        <img src="{{ config('app.logo-light') }}" alt="logo" class="img-fluid">
                      </a>
                      <p class="mb-0 fs-5 text-dark">Our global reach allows us to create unique, culturally relevant
                        campaigns for businesses across different industries.</p>
                    </div>
                  </div>
                  <span
                    class="border rounded-circle round-490 d-block position-absolute top-100 start-50 translate-middle"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--  Testimonial Section -->
    <section class="testimonial py-5 py-lg-11 py-xl-12 bg-light-gray">
      <div class="container">
        <div class="d-flex flex-column gap-5 gap-xl-11">
          <div class="row gap-7 gap-xl-0">
            <div class="col-xl-4 col-xxl-4">
              <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                data-aos-duration="1000">
                <span
                  class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">05</span>
                <hr class="border-line bg-white">
                <span class="badge text-bg-dark">Testimonial</span>
              </div>
            </div>
            <div class="col-xl-8 col-xxl-7">
              <div class="row">
                <div class="col-xxl-8">
                  <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <h2 class="mb-0">Stories from our community</h2>
                    <p class="fs-5 mb-0 text-opacity-70">Real experiences, genuine feedback—discover how our platform has transformed the way people engage with the environment.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row gap-7 gap-lg-0">
            <div class="col-lg-4 col-xl-3 d-flex align-items-stretch">
              <div class="card bg-primary w-100" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between">
                  <div class="d-flex flex-column gap-4">
                    <p class="mb-0">Hear from them</p>
                    <h4 class="mb-0">{{ config('app.name') }} has made it so easy to track my eco-friendly activities and get rewarded for them!</h4>
                  </div>
                  <div class="hstack gap-3">
                    <img src="home/images/testimonial/user-1.jpg" alt=""
                      class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="60" height="60">
                    <div>
                      <h5 class="mb-1 fw-normal">Albert Flores</h5>
                      <p class="mb-0">Eco Warrior</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-xl-6 d-flex align-items-stretch">
              <div class="card bg-dark w-100" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between">
                  <div class="d-flex flex-column gap-4">
                    <p class="mb-0 text-white text-opacity-70">Hear from them</p>
                    <h4 class="mb-0 text-white pe-xl-2">From planting trees to recycling, I love that I can earn crypto for making a difference.</h4>
                    <div class="hstack gap-2">
                      <ul class="list-unstyled mb-0 hstack gap-1">
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                              class="fs-6 text-white"></iconify-icon></a></li>
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                              class="fs-6 text-white"></iconify-icon></a></li>
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                              class="fs-6 text-white"></iconify-icon></a></li>
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                              class="fs-6 text-white"></iconify-icon></a></li>
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                              class="fs-6 text-white"></iconify-icon></a></li>
                      </ul>
                      <h6 class="mb-0 text-white fw-medium">4.0</h6>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="hstack gap-3">
                      <img src="home/images/testimonial/user-2.jpg" alt=""
                        class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="60" height="60">
                      <div>
                        <h5 class="mb-1 fw-normal text-white">Robert Fox</h5>
                        <p class="mb-0 text-white text-opacity-70">Eco Enthusiast</p>
                      </div>
                    </div>
                    <span><img src="home/images/testimonial/quete.svg" alt="quete"
                        class="img-fluid flex-shrink-0"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-xl-3 d-flex align-items-stretch">
              <div class="card w-100" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <div class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between">
                  <div class="d-flex flex-column gap-4">
                    <p class="mb-0">Hear from them</p>
                    <h4 class="mb-0">Super smooth process with incredible results. highly recommend!</h4>
                  </div>
                  <div class="hstack gap-3">
                    <img src="home/images/testimonial/user-3.jpg" alt=""
                      class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="60" height="60">
                    <div>
                      <h5 class="mb-1 fw-normal">Jenny Wilson</h5>
                      <p class="mb-0">Eco Advocate</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--  FAQ Section -->
    <section class="faq py-5 py-lg-11 py-xl-12">
      <div class="container">
        <div class="d-flex flex-column gap-5 gap-xl-11">
          <div class="row gap-7 gap-xl-0">
            <div class="col-xl-4 col-xxl-4">
              <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                data-aos-duration="1000">
                <span
                  class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">06</span>
                <hr class="border-line bg-white">
                <span class="badge text-bg-dark">FAQs</span>
              </div>
            </div>
            <div class="col-xl-8 col-xxl-7">
              <div class="row">
                <div class="col-xxl-9">
                  <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <h2 class="mb-0">Frequently asked questions</h2>
                    <p class="fs-5 mb-0 text-opacity-70">Got questions? We've got answers. If you can't find what you're looking for, feel free to reach out to us.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-xl-8">
              <div class="accordion accordion-flush" id="accordionFlushExample" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1000">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-8 fw-bold" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      What is {{ config('app.name') }}?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body pt-0 fs-5 text-dark">{{ config('app.name') }} is a cryptocurrency that rewards users for engaging in eco-friendly activities. Our goal is to create a global community of individuals who are passionate about protecting the environment.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-8 fw-bold" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      How do I earn {{ config('app.name') }}s?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body pt-0 fs-5 text-dark">You can earn {{ config('app.name') }}s by completing a variety of eco-friendly activities, such as planting trees, cycling, and recycling. Simply upload a photo or video of yourself completing the activity to our platform, and you will be rewarded with {{ config('app.name') }}s.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-8 fw-bold" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      What can I do with my {{ config('app.name') }}s?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body pt-0 fs-5 text-dark">You can use your {{ config('app.name') }}s to purchase products and services from our partners, or you can trade them on a cryptocurrency exchange.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-8 fw-bold" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                      How do I get started?
                    </button>
                  </h2>
                  <div id="flush-collapseFour" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body pt-0 fs-5 text-dark">To get started, simply create an account on our platform. Once you have created an account, you can start completing eco-friendly activities and earning {{ config('app.name') }}s.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--  Success Stories Section -->
    <section class="Recent-news bg-light-gray py-5 py-lg-11 py-xl-12">
      <div class="container">
        <div class="d-flex flex-column gap-5 gap-xl-11">
          <div class="row gap-7 gap-xl-0">
            <div class="col-xl-4 col-xxl-4">
              <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                data-aos-duration="1000">
                <span
                  class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">07</span>
                <hr class="border-line bg-white">
                <span class="badge text-bg-dark">Success Stories</span>
              </div>
            </div>
            <div class="col-xl-8 col-xxl-7">
              <div class="row">
                <div class="col-xxl-8">
                  <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <h2 class="mb-0">Inspiring Journeys of Change</h2>
                    <p class="fs-5 mb-0 text-opacity-70">See how our community is making a real-world impact. These stories highlight the creative and inspiring ways people are contributing to a greener planet.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-6 mb-7 mb-xl-0">
              <div class="resources d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <a href="/login"
                  class="resources-img resources-img-first position-relative overflow-hidden d-block">
                  <img src="home/images/resources/resources-1.jpg" alt="resources" class="img-fluid">
                </a>
                <div class="resources-details">
                  <p class="mb-0">Dec 24, 2025</p>
                  <h4 class="mb-0">From City Dweller to Urban Gardener</h4>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
              <div class="resources d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1000">
                <a href="/login" class="resources-img position-relative overflow-hidden d-block">
                  <img src="home/images/resources/resources-2.jpg" alt="resources" class="img-fluid">
                </a>
                <div class="resources-details">
                  <p class="mb-0">Dec 24, 2025</p>
                  <h4 class="mb-0">Community Cleanup Challenge</h4>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
              <div class="resources d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="300"
                data-aos-duration="1000">
                <a href="/login" class="resources-img position-relative overflow-hidden d-block">
                  <img src="home/images/resources/resources-3.jpg" alt="resources" class="img-fluid">
                </a>
                <div class="resources-details">
                  <p class="mb-0">Dec 24, 2025</p>
                  <h4 class="mb-0">Cycling for a Cause</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
    
@endsection
