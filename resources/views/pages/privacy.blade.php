@extends('layouts.master')
@section('content')
    <!-- section content begin -->
    <div class="page-wrapper overflow-hidden">

        <!--  Banner Section -->
        <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
            style="background-image: url({{ asset('home/images/backgrounds/privacy-policy-banner.jpg') }});">
            <div class="container">
                <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
                    <div class="row align-items-center">
                        <div class="col-xl-8">
                            <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <img src="home/images/svgs/primary-leaf.svg" alt=""
                                    class="img-fluid animate-spin">
                                <p class="mb-0 text-white fs-5 text-opacity-70">Your privacy matters to us. Learn how <span
                                        class="text-primary">{{ config('app.name') }}</span> protects your data.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <h1 class="mb-0 fs-16 text-white lh-1">Privacy Policy</h1>
                        <a href="{{ route('register') }}" class="p-1 ps-7 bg-primary rounded-pill">
                            <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--  Privacy Content Section -->
        <section class="privacy-content py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11 gap-xxl-12">

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                1. Introduction
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    {{ config('app.name') }} ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our platform. Please read this policy carefully to understand our views and practices regarding your personal data.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                2. Information We Collect
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    We collect information you provide directly to us, including: name, email address, phone number, and profile information when you create an account; photos, videos, and descriptions of eco-friendly activities you upload; payment and transaction information when you make deposits or withdrawals; and communications you send to us. We also automatically collect certain information when you use our platform, including device information, IP address, browser type, and usage data.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                3. How We Use Your Information
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    We use your information to: provide, maintain, and improve our services; process transactions and send related information; verify eco-friendly activities and distribute rewards; send you technical notices, updates, and support messages; respond to your comments, questions, and customer service requests; monitor and analyze trends, usage, and activities; detect, investigate, and prevent fraudulent transactions and other illegal activities; and personalize your experience on our platform.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                4. Information Sharing
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except: with service providers who assist us in operating our platform; to comply with legal obligations or respond to lawful requests; to protect the rights, property, or safety of {{ config('app.name') }}, our users, or others; and in connection with a merger, acquisition, or sale of assets. Your uploaded eco-friendly media may be visible to other community members based on your privacy settings.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                5. Data Security
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. This includes encryption of sensitive data, secure servers, and regular security assessments. However, no method of transmission over the Internet or electronic storage is 100% secure, and we cannot guarantee absolute security.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                6. Cookies & Tracking
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    We use cookies and similar tracking technologies to collect and track information about your browsing activities. Cookies help us remember your preferences, understand how you use our platform, and improve your experience. You can instruct your browser to refuse all cookies or indicate when a cookie is being sent. However, some features of our platform may not function properly without cookies.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                7. Your Rights
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    You have the right to: access and receive a copy of your personal data; request correction of inaccurate data; request deletion of your data (subject to certain exceptions); object to or restrict processing of your data; withdraw consent at any time; and lodge a complaint with a supervisory authority. To exercise these rights, please contact us using the information provided below.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                8. Data Retention
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    We retain your personal information for as long as your account is active or as needed to provide you services. We may also retain and use your information to comply with legal obligations, resolve disputes, and enforce our agreements. When your data is no longer needed, we will securely delete or anonymize it.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                9. Children's Privacy
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    Our platform is not intended for children under the age of 13. We do not knowingly collect personal information from children under 13. If we become aware that we have collected personal information from a child under 13 without parental consent, we will take steps to delete that information promptly.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                10. Policy Updates
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date. You are advised to review this Privacy Policy periodically for any changes. Continued use of our platform after changes constitutes acceptance of the updated policy.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                11. Contact Us
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <p class="mb-0 fs-5 text-dark">
                                    If you have any questions about this Privacy Policy or our data practices, please contact us at <a href="mailto:{{ config('app.email') }}" class="text-primary">{{ config('app.email') }}</a>. We are committed to working with you to obtain a fair resolution of any complaint or concern about privacy.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
@endsection
