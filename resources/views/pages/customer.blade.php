@extends('layouts.master')
@section('content')
   <!-- section content begin -->
<div class="uk-section in-offset-bottom-20">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-3-4@m">
                <div data-uk-grid>
                    <div class="uk-width-1-2@s uk-width-2-3@m">
                        <p class="uk-text-large">We empower affiliate marketers to attract investors and scale their ventures</p>
                        <p>Our platform combines expert insights and cutting-edge tools to help you build a thriving affiliate marketing business that investors can’t resist.</p>
                    </div>
                    <div class="uk-width-1-2@s uk-width-expand@m">
                        <ul class="uk-list uk-list-divider">
                            <li>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="in-icon-wrap primary-color uk-margin-right">
                                        <i class="fas fa-paper-plane fa-lg"></i>
                                    </div>
                                    <div>
                                        <h3 class="uk-margin-remove-bottom count" data-counter-end="12500">12500</h3>
                                        <span class="uk-label in-label-small">Affiliate Campaigns Launched</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="in-icon-wrap primary-color uk-margin-right">
                                        <i class="fas fa-user-tie fa-lg"></i>
                                    </div>
                                    <div>
                                        <h3 class="uk-margin-remove-bottom count" data-counter-end="3200">3200</h3>
                                        <span class="uk-label in-label-small">Investors Engaged</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-child-width-1-2@m in-testimonial-8" data-uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                    <img class="uk-position-bottom-right" src="{{ asset('img/blockit/in-testimoni-2.png') }}" alt="client-testimoni" width="200">
                    <div class="uk-card-header">
                        <blockquote>
                            <p>This platform streamlined my affiliate tracking and made it so easy to present solid data to potential investors!</p>
                        </blockquote>
                    </div>
                    <div class="uk-card-footer">
                        <img src="{{ asset('img/blockit/in-client-testi-1.svg') }}" alt="client-logo" width="54">
                        <blockquote>
                            <footer>Jessica Miles<br><cite>Affiliate Manager at ClickBoost</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                    <img class="uk-position-bottom-right" src="{{ asset('img/blockit/in-testimoni-3.png') }}" alt="client-testimoni" width="200">
                    <div class="uk-card-header">
                        <blockquote>
                            <p>The tools here helped me organize my affiliate earnings and pitch to investors with confidence—game changer!</p>
                        </blockquote>
                    </div>
                    <div class="uk-card-footer">
                        <img src="{{ asset('img/blockit/in-client-testi-2.svg') }}" alt="client-logo" width="54">
                        <blockquote>
                            <footer>David Nguyen<br><cite>Marketing Strategist at ProfitPath</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section uk-padding-remove-top">
    <div class="uk-container">
        <div class="uk-grid uk-child-width-1-3@m in-testimonial-7" data-uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                    <div class="uk-card-header">
                        <img src="{{ asset('img/blockit/in-client-testi-3.svg') }}" alt="client-logo" width="60">
                    </div>
                    <div class="uk-card-body">
                        <blockquote>
                            <p>Love how this tool tracks my affiliate performance—investors are impressed with the detailed reports!</p>
                        </blockquote>
                    </div>
                    <div class="uk-card-footer">
                        <blockquote>
                            <footer>Emily Carter<br><cite>Affiliate Lead at GrowEasy</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                    <div class="uk-card-header">
                        <img src="{{ asset('img/blockit/in-client-testi-4.svg') }}" alt="client-logo" width="60">
                    </div>
                    <div class="uk-card-body">
                        <blockquote>
                            <p>It’s my go-to for sharing affiliate revenue updates with investors—saves time and builds trust.</p>
                        </blockquote>
                    </div>
                    <div class="uk-card-footer">
                        <blockquote>
                            <footer>Ryan Patel<br><cite>Founder at LinkMaster</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                    <div class="uk-card-header">
                        <img src="{{ asset('img/blockit/in-client-testi-5.svg') }}" alt="client-logo" width="60">
                    </div>
                    <div class="uk-card-body">
                        <blockquote>
                            <p>This has been key for monthly affiliate updates—keeps my investors informed and engaged.</p>
                        </blockquote>
                    </div>
                    <div class="uk-card-footer">
                        <blockquote>
                            <footer>Sophia Lee<br><cite>Campaign Manager at EarnEdge</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
@endsection