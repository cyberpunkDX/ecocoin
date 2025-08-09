@extends('layouts.master')
@section('content')
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-text-center uk-margin-medium-bottom">
                    <h1>{{ config('app.name') }} <span class="in-highlight">Legal Docs</span></h1>
                </div>
                <div class="uk-grid-divider uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                    <div>
                        <div class="in-icon-wrap primary-color">
                            <i class="fas fa-file fa-lg"></i>
                        </div>
                        <h3 class="uk-margin-top">Terms of Service</h3>
                        <p>Review the Terms of Service and Agreement for {{ config('app.name') }}, including our Affiliate Program and Investor Terms.</p>
                        <ul class="uk-list uk-margin-top">
                            <li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Affiliate Agreement</a></li>
                            <li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Terms of Service for {{ config('app.name') }} Investments</a></li>
                        </ul>
                    </div>
                    <div>
                        <div class="in-icon-wrap primary-color">
                            <i class="fas fa-globe fa-lg"></i>
                        </div>
                        <h3 class="uk-margin-top">Policies</h3>
                        <p>Learn how {{ config('app.name') }} collects, uses, and protects your affiliate and investment data.</p>
                        <ul class="uk-list uk-margin-top">
                            <li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="uk-visible@m">
                        <div class="in-icon-wrap primary-color">
                            <i class="fas fa-shield-alt fa-lg"></i>
                        </div>
                        <h3 class="uk-margin-top">Security</h3>
                        <p>Discover how {{ config('app.name') }} safeguards your affiliate earnings and investor information.</p>
                        <ul class="uk-list uk-margin-top">
                            <li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>{{ config('app.name') }} Security Overview</a></li>
                            <li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Responsible Disclosure Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-5@m">
                    <div class="uk-card uk-card-large uk-card-default in-card-paper">
                        <div class="uk-card-body">
                            <h2>{{ config('app.name') }} FAQ</h2>
                            <p>At {{ config('app.name') }}, we’re committed to helping affiliate marketers and investors succeed. Below, find answers to common questions about our platform, affiliate programs, and investment opportunities.</p>
                            <p>Whether you’re scaling your affiliate network or securing funding, we provide the tools and transparency you need to thrive in the affiliate marketing investment space.</p>
                            <hr class="uk-margin-medium-top uk-margin-small-bottom">
                            <ul class="in-faq-5" data-uk-accordion="collapsible: false">
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#">Affiliate Guidelines</a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list uk-list-bullet">
                                            <li>Adhere to {{ config('app.name') }}’s Affiliate Promotion Guidelines</li>
                                            <li>Do not misrepresent earnings or investment opportunities</li>
                                            <li>Always disclose your affiliate relationship as per {{ config('app.name') }} policies</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Restricted Practices</a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list uk-list-bullet">
                                            <li>Altering or misusing {{ config('app.name') }} branding or trademarks</li>
                                            <li>Using {{ config('app.name') }} in misleading affiliate promotions</li>
                                            <li>Pairing {{ config('app.name') }} trademarks with unapproved third-party brands</li>
                                            <li>Claiming {{ config('app.name') }} endorsement without authorization</li>
                                            <li>Incorporating {{ config('app.name') }} trademarks into social media handles</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">{{ config('app.name') }} Trademarks</a>
                                    <div class="uk-accordion-content">
                                        <p>{{ config('app.name') }} trademarks include our logo, name, and affiliate program identifiers. Omission from this list does not waive our intellectual property rights.</p>
                                        <p>The {{ config('app.name') }} logo and name are ® Registered in Canada and the United States, with registrations pending globally. Use the ® mark only in these regions until fully registered elsewhere.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="uk-card uk-card-small uk-card-body uk-background-muted uk-border-rounded uk-margin-medium-top">
                                <p class="uk-text-small">For legal inquiries, contact <a class="uk-text-lowercase uk-link" href="mailto:legal@{{ config('app.name') }}.com">legal@{{ config('app.name') }}.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
@endsection