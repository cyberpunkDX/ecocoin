@extends('layouts.master')
@section('content')
    <!-- section content begin -->
    <div class="page-wrapper overflow-hidden">

        <!--  Banner Section -->
        <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
            style="background-image: url({{ asset('home/images/backgrounds/projects-banner.jpg') }});">
            <div class="container">
                <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
                    <div class="row align-items-center">
                        <div class="col-xl-8">
                            <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <img src="home/images/svgs/primary-leaf.svg" alt=""
                                    class="img-fluid animate-spin">
                                <p class="mb-0 text-white fs-5 text-opacity-70">We are a passionate team dedicated to <span
                                        class="text-primary">incentivizing eco-friendly</span> actions to build a sustainable future for all.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <h1 class="mb-0 fs-16 text-white lh-1">About {{ config('app.name') }}</h1>
                        <a href="{{ route('register') }}" class="p-1 ps-7 bg-primary rounded-pill">
                            <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--  About Content Section -->
        <section class="about-content py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11 gap-xxl-12">
                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                Our Mission
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    At {{ config('app.name') }}, we are driven by a simple yet powerful idea: to reward individuals for making environmentally conscious choices. We believe that by creating a community of eco-warriors, we can inspire a global movement towards a greener, more sustainable planet. Our platform provides a space for users to share their eco-friendly activities, track their impact, and earn cryptocurrency as a token of appreciation for their efforts.
                                </p>
                                <p class="mb-0 fs-5 text-dark">
                                    We are more than just a cryptocurrency project; we are a community of changemakers. By merging technology with a passion for the environment, we are creating a unique ecosystem where every green action counts. Whether you're a seasoned environmentalist or just starting your journey, {{ config('app.name') }} offers a rewarding way to make a positive impact. Join us as we build a better future, one eco-friendly act at a time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-xl-5">
                        <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                            <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="1000">1000</span>K+
                                </h2>
                                <div class="d-flex flex-column gap-3">
                                    <h4 class="mb-0">Community Members</h4>
                                    <p class="mb-0">A growing global network of individuals committed to making a difference.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                            <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="10">10</span>M+
                                </h2>
                                <div class="d-flex flex-column gap-3">
                                    <h4 class="mb-0">{{ config('app.name') }}s Earned</h4>
                                    <p class="mb-0">Rewarding our community for their commitment to a greener planet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                            <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="300"
                                data-aos-duration="1000">
                                <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="500">500</span>+
                                </h2>
                                <div class="d-flex flex-column gap-3">
                                    <h4 class="mb-0">Eco-Activities</h4>
                                    <p class="mb-0">A diverse range of activities that empower our community to make an impact.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  Meet our team Section -->
        <section class="meet-our-team py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11">
                    <div class="row gap-7 gap-xl-0">
                        <div class="col-xl-4 col-xxl-4">
                            <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000">
                                <span
                                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">02</span>
                                <hr class="border-line bg-white">
                                <span class="badge text-bg-dark">The team</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-7">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0">Meet Our Team</h2>
                                        <p class="fs-5 mb-0 text-opacity-70">Our team is committed to redefining digital
                                            experiences through
                                            innovative web solutions while fostering a diverse and collaborative
                                            environment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                            <div class="meet-team d-flex flex-column gap-4" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <div class="meet-team-img position-relative overflow-hidden">
                                    <img src="home/images/team/team-img-1.jpg" alt="team-img"
                                        class="img-fluid w-100">
                                    <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                        <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                            <li><a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="home/images/svgs/icon-twitter.svg" alt="twitter"></a>
                                            </li>
                                            <li><a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="home/images/svgs/icon-be.svg" alt="be"></a></li>
                                            <li><a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="home/images/svgs/icon-linkedin.svg" alt="linkedin"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="meet-team-details">
                                    <h4 class="mb-0">Martha Finley</h4>
                                    <p class="mb-0">Founder & CEO</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                            <div class="meet-team d-flex flex-column gap-4" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <div class="meet-team-img position-relative overflow-hidden">
                                    <img src="home/images/team/team-img-2.jpg" alt="team-img"
                                        class="img-fluid w-100">
                                    <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                        <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                            <li><a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="home/images/svgs/icon-twitter.svg" alt="twitter"></a>
                                            </li>
                                            <li><a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="home/images/svgs/icon-be.svg" alt="be"></a></li>
                                            <li><a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="home/images/svgs/icon-linkedin.svg" alt="linkedin"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="meet-team-details">
                                    <h4 class="mb-0">Floyd Miles</h4>
                                    <p class="mb-0">Lead Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                            <div class="meet-team d-flex flex-column gap-4" data-aos="fade-up" data-aos-delay="300"
                                data-aos-duration="1000">
                                <div class="meet-team-img position-relative overflow-hidden">
                                    <img src="home/images/team/team-img-3.jpg" alt="team-img"
                                        class="img-fluid w-100">
                                    <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                        <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                            <li><a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="home/images/svgs/icon-twitter.svg" alt="twitter"></a>
                                            </li>
                                            <li><a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="home/images/svgs/icon-be.svg" alt="be"></a></li>
                                            <li><a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="home/images/svgs/icon-linkedin.svg" alt="linkedin"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="meet-team-details">
                                    <h4 class="mb-0">Glenna Snyder</h4>
                                    <p class="mb-0">Community Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                            <div class="meet-team d-flex flex-column gap-4" data-aos="fade-up" data-aos-delay="400"
                                data-aos-duration="1000">
                                <div class="meet-team-img position-relative overflow-hidden">
                                    <img src="home/images/team/team-img-4.jpg" alt="team-img"
                                        class="img-fluid w-100">
                                    <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                        <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                            <li><a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="home/images/svgs/icon-twitter.svg" alt="twitter"></a>
                                            </li>
                                            <li><a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="../assets/images/svgs/icon-be.svg" alt="be"></a></li>
                                            <li><a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="../assets/images/svgs/icon-linkedin.svg" alt="linkedin"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="meet-team-details">
                                    <h4 class="mb-0">Albert Flores</h4>
                                    <p class="mb-0">Marketing Specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
