@extends('layouts.master')
@section('content')
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-content-10">
                    <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-background-bottom-left uk-background-contain" style="background-image: url({{ asset('img/blockit/in-content-10-image.png') }})">
                        <div class="uk-grid uk-flex uk-flex-center">
                            <div class="uk-width-3-5@m uk-text-center">
                                <h1 class="uk-margin-small-top">Your Affiliate Marketing Investment Journey Starts Here</h1>
                                <form class="uk-search uk-search-default uk-width-1-1 uk-margin-bottom">
                                    <span data-uk-search-icon></span>
                                    <input class="uk-search-input uk-border-pill" type="search" placeholder="Search for affiliate marketing guides...">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid-divider uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" data-uk-grid>
                        <div>
                            <h3 class="uk-heading-bullet"><a class="uk-link-text" href="#">Affiliate Basics & Strategies</a></h3>
                            <div class="uk-grid uk-grid-small" data-uk-grid>
                                <div class="uk-width-expand@m">
                                    <p>Learn the fundamentals of affiliate marketing and proven strategies to maximize your returns.</p>
                                    <a href="#" class="uk-button uk-button-text">Explore Guides</a>
                                </div>
                                <div class="uk-width-auto@m">
                                    <div class="in-icon-wrap small transparent uk-margin-left">
                                        <i class="fas fa-question fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h3 class="uk-heading-bullet"><a class="uk-link-text" href="#">Security in Affiliate Investments</a></h3>
                            <div class="uk-grid uk-grid-small" data-uk-grid>
                                <div class="uk-width-expand@m">
                                    <p>Understand how to protect your affiliate earnings and secure your investment platforms.</p>
                                    <a href="#" class="uk-button uk-button-text">Learn More</a>
                                </div>
                                <div class="uk-width-auto@m">
                                    <div class="in-icon-wrap small transparent uk-margin-left">
                                        <i class="fas fa-unlock-alt fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="uk-heading-bullet"><a class="uk-link-text" href="#">Get Affiliate Support</a></h3>
                            <div class="uk-grid uk-grid-small" data-uk-grid>
                                <div class="uk-width-expand@m">
                                    <p>Need help with your affiliate campaigns? Open a ticket with our expert support team.</p>
                                    <a href="#" class="uk-button uk-button-text">Contact Us</a>
                                </div>
                                <div class="uk-width-auto@m">
                                    <div class="in-icon-wrap small transparent uk-margin-left">
                                        <i class="fas fa-life-ring fa-3x"></i>
                                    </div>
                                </div>
                            </div>
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
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-5@m">
                    <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-1@m in-content-11" data-uk-grid>
                        <div>
                            <a href="#" class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                                <div class="uk-grid" data-uk-grid>
                                    <div class="uk-width-auto@m uk-flex uk-flex-middle">
                                        <div class="in-icon-wrap in-margin-remove-left@s uk-margin-left">
                                            <i class="fas fa-book fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand@m in-margin-top-10@s">
                                        <h4 class="uk-margin-small-bottom">Starting Your Affiliate Marketing Journey</h4>
                                        <img class="uk-border-pill uk-background-muted uk-float-left uk-margin-remove-adjacent uk-margin-small-right" src="{{ asset('img/blockit/in-team-7.png') }}" width="40" height="40" alt="author-image">
                                        <p class="uk-text-small uk-margin-remove-bottom">5 articles in this collection</p>
                                        <p class="uk-text-small uk-margin-remove-top">Written by Sarah Johnson</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                                <div class="uk-grid" data-uk-grid>
                                    <div class="uk-width-auto@m uk-flex uk-flex-middle">
                                        <div class="in-icon-wrap in-margin-remove-left@s uk-margin-left">
                                            <i class="fas fa-pen-nib fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand@m in-margin-top-10@s">
                                        <h4 class="uk-margin-small-bottom">Creating Affiliate Content</h4>
                                        <img class="uk-border-pill uk-background-muted uk-float-left uk-margin-remove-adjacent uk-margin-small-right" src="{{ asset('img/blockit/in-team-8.png') }}" width="40" height="40" alt="author-image">
                                        <p class="uk-text-small uk-margin-remove-bottom">3 articles in this collection</p>
                                        <p class="uk-text-small uk-margin-remove-top">Written by Mark Thompson</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                                <div class="uk-grid" data-uk-grid>
                                    <div class="uk-width-auto@m uk-flex uk-flex-middle">
                                        <div class="in-icon-wrap in-margin-remove-left@s uk-margin-left">
                                            <i class="fas fa-file-invoice fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand@m in-margin-top-10@s">
                                        <h4 class="uk-margin-small-bottom">Tracking Earnings & Withdrawals</h4>
                                        <img class="uk-border-pill uk-background-muted uk-float-left uk-margin-remove-adjacent uk-margin-small-right" src="{{ asset('img/blockit/in-team-6.png') }}" width="40" height="40" alt="author-image">
                                        <p class="uk-text-small uk-margin-remove-bottom">4 articles in this collection</p>
                                        <p class="uk-text-small uk-margin-remove-top">Written by Lisa Carter</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                                <div class="uk-grid" data-uk-grid>
                                    <div class="uk-width-auto@m uk-flex uk-flex-middle">
                                        <div class="in-icon-wrap in-margin-remove-left@s uk-margin-left">
                                            <i class="fas fa-users fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand@m in-margin-top-10@s">
                                        <h4 class="uk-margin-small-bottom">Scaling Your Affiliate Network</h4>
                                        <img class="uk-border-pill uk-background-muted uk-float-left uk-margin-remove-adjacent uk-margin-small-right" src="{{ asset('img/blockit/in-team-3.png') }}" width="40" height="40" alt="author-image">
                                        <p class="uk-text-small uk-margin-remove-bottom">6 articles in this collection</p>
                                        <p class="uk-text-small uk-margin-remove-top">Written by James Patel</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
@endsection