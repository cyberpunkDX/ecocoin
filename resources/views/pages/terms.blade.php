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
                                <p class="mb-0 text-white fs-5 text-opacity-70">Please read these terms carefully before using <span
                                        class="text-primary">{{ config('app.name') }}</span> platform.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <h1 class="mb-0 fs-16 text-white lh-1">Terms of Use</h1>
                        <a href="{{ route('register') }}" class="p-1 ps-7 bg-primary rounded-pill">
                            <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--  Terms Content Section -->
        <section class="terms-content py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11 gap-xxl-12">
                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                1. Acceptance of Terms
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    By accessing and using the {{ config('app.name') }} platform, you agree to be bound by these Terms of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this platform.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                2. Use License
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    Permission is granted to temporarily access and use {{ config('app.name') }} for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not: modify or copy the materials; use the materials for any commercial purpose; attempt to decompile or reverse engineer any software contained on the platform; remove any copyright or other proprietary notations from the materials; or transfer the materials to another person.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                3. Account Responsibilities
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    You are responsible for maintaining the confidentiality of your account and password. You agree to accept responsibility for all activities that occur under your account. You must immediately notify {{ config('app.name') }} of any unauthorized use of your account or any other breach of security. {{ config('app.name') }} will not be liable for any loss that you may incur as a result of someone else using your password or account.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                4. Eco-Activities & Rewards
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    {{ config('app.name') }} rewards users for participating in eco-friendly activities. All submitted activities are subject to verification. We reserve the right to reject, modify, or revoke rewards for activities that do not meet our guidelines or are found to be fraudulent. The value and availability of rewards may change at any time without prior notice.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                5. Disclaimer
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    The materials on {{ config('app.name') }}'s platform are provided on an 'as is' basis. {{ config('app.name') }} makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                6. Limitations
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    In no event shall {{ config('app.name') }} or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on {{ config('app.name') }}'s platform, even if {{ config('app.name') }} or an authorized representative has been notified orally or in writing of the possibility of such damage.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                7. Modifications
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    {{ config('app.name') }} may revise these terms of use for its platform at any time without notice. By using this platform you are agreeing to be bound by the then current version of these terms of use. We encourage you to periodically review these terms to stay informed of updates.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                8. Contact Us
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    If you have any questions about these Terms of Use, please contact us at <a href="mailto:{{ config('app.email') }}" class="text-primary">{{ config('app.email') }}</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
