<footer class="footer-wrapper">
            <div class="footer-container container">
                <div class="footer-column three columns" id="footer-widget-1">
                    <div id="text-5" class="widget widget_text greennature-item greennature-widget">
                        <div class="textwidget">
                            <p><img src="{{ config('app.logo-dark') }}"
                                    style="width: 170px;" alt="" /></p>
                            <p>{{ config('app.name') }} empowers individuals to live sustainably by rewarding eco-friendly actions with
                                cryptocurrency. Join our movement to create a greener planet!</p>
                        </div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-2">
                    <div id="text-9" class="widget widget_text greennature-item greennature-widget">
                        <h3 class="greennature-widget-title">Contact Info</h3>
                        <div class="clear"></div>
                        <div class="textwidget"><span class="clear"></span><span class="greennature-space"
                                style="margin-top: -6px; display: block;"></span>
                            Address: 184 Main Collins Street West Victoria 8007
                            <span class="clear"></span><span class="greennature-space"
                                style="margin-top: 10px; display: block;"></span>
                            <i class="greennature-icon fa fa-phone"
                                style="vertical-align: middle; color: #fff; font-size: 16px;"></i> {{ config('app.phone') }}
                            <span class="clear"></span><span class="greennature-space"
                                style="margin-top: 10px; display: block;"></span>
                           <span class="greennature-space"
                                style="margin-top: 10px; display: block;"></span>
                            <i class="greennature-icon fa fa-envelope-o"
                                style="vertical-align: middle; color: #fff; font-size: 16px;"></i> <a
                                href="mailto:{{ config('app.email') }}" class="__cf_email__">{{ config('app.email') }}</a>
                        </div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-3">
                    <div id="gdlr-recent-post-widget-5"
                        class="widget widget_gdlr-recent-post-widget greennature-item greennature-widget">
                        <h3 class="greennature-widget-title">Recent Posts</h3>
                        <div class="clear"></div>
                        <div class="greennature-recent-post-widget">
                            <div class="recent-post-widget">
                                <div class="recent-post-widget-thumbnail"><a
                                        href="https://demo.goodlayers.com/greennature/2014/03/21/sem-porta-mollis-parturient/"><img
                                            src="https://demo.goodlayers.com/greennature/wp-content/uploads/2013/12/shutterstock_294481373-150x150.jpg"
                                            alt="" width="150" height="150" /></a></div>
                                <div class="recent-post-widget-content">
                                    <div class="recent-post-widget-title"><a
                                            href="https://demo.goodlayers.com/greennature/2014/03/21/sem-porta-mollis-parturient/">Eco
                                            Coin's Global Impact</a></div>
                                    <div class="recent-post-widget-info">
                                        <div class="blog-info blog-date greennature-skin-info"><i
                                                class="fa fa-clock-o"></i><a
                                                href="https://demo.goodlayers.com/greennature/2014/03/21/">21 Mar
                                                2014</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="recent-post-widget">
                                <div class="recent-post-widget-thumbnail"><a
                                        href="#"><img
                                            src="https://demo.goodlayers.com/greennature/wp-content/uploads/2013/12/shutterstock_181393724-150x150.jpg"
                                            alt="" width="150" height="150" /></a></div>
                                <div class="recent-post-widget-content">
                                    <div class="recent-post-widget-title"><a
                                            href="#">Top
                                            Eco Warriors</a></div>
                                    <div class="recent-post-widget-info">
                                        <div class="blog-info blog-date greennature-skin-info"><i
                                                class="fa fa-clock-o"></i><a
                                                href="#">21 Mar
                                                2014</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                
                <div class="clear"></div>
            </div>
            <div class="copyright-wrapper">
                <div class="copyright-container container">
                    <div class="copyright-left">
                        <a href="https://facebook.com/goodlayers"><i class="greennature-icon fa fa-facebook"
                                style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
                        <a href="https://twitter.com/goodlayers"><i class="greennature-icon fa fa-twitter"
                                style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
                        <a href="#"><i class="greennature-icon fa fa-dribbble"
                                style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
                        <a href="#"><i class="greennature-icon fa fa-pinterest"
                                style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
                        <a href="#"><i class="greennature-icon fa fa-google-plus"
                                style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
                        <a href="#"><i class="greennature-icon fa fa-instagram"
                                style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
                    </div>
                    
                    <div class="copyright-right">
                        Copyright &copy; {{ config('app.name') }}, All Rights Reserved
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </footer>
        @include('layouts.partials.payment-box')