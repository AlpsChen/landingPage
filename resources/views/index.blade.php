<!DOCTYPE html>
<html dir="ltr" lang="zh-Hant">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Hung-An Chen" />

    <!-- Stylesheets
	============================================= -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
	============================================= -->
    <title>陳泓安 Alps Chen</title>

    <!-- Meta
    ============================================= -->
    <meta property="og:title" content="陳泓安 Alps" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://alpschen.tech" />
    <meta property="og:image" content="/images/home/slider/1.jpg" />
    <meta property="og:description" content="Welcome to the domain for Alps! 歡迎來到我的個人網站！" />
    <meta name="description" content="Welcome to the domain for Alps! 歡迎來到我的個人網站！" />

    <!-- Favicon
    ============================================= -->
    {{--
    <link rel="shortcut icon" href="https://alpschen.tech/images/a.ico" type="image/x-icon" /> --}}
    <link rel="shortcut icon" href="/images/a.ico">

    <!-- 由 Google 結構化資料標記協助工具產生的 JSON-LD 標記。 -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Article",
            "name": "陳泓安 Hung-An Chen",
            "author": {
                "@type": "Person",
                "name": "Hung-An Chen"
            },
            "articleBody": ["會考會考的數學", "2017 Microfims &amp; Informations camp.",
                "Taipei Municipal Jianguo High School"
            ],
            "publisher": {
                "@type": "Organization",
                "name": "陳泓安"
            }
        }
    </script>

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>
    @include('includes.slider')

        <!-- Header
		============================================= -->
        <header id="header" class="full-header">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger">
                        <i class="icon-reorder"></i>
                    </div>

                    <!-- Logo
					============================================= -->
                    <div id="logo">
                        <a href="{{url('/')}}" class="standard-logo" data-dark-logo="images/logo.png">
                            <img src="{{asset('images/logo2.png')}}" alt="Hung-An">
                        </a>
                        <a href="{{url('/')}}" class="retina-logo" data-dark-logo="images/logo@2x.png">
                            <img src="{{asset('images/logo2.png')}}" alt="Hung-An">
                        </a>
                        <!-- <h1 style="justify-content: center">Hung-An</h1> -->
                    </div>
                    <!-- #logo end -->

                    <!-- Primary Navigation
					============================================= -->
                    <nav id="primary-menu">

                        <ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
                            <li>
                                <a href="#" data-href="#home">
                                    <div>Home</div>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-href="#section-about">
                                    <div>About Me</div>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-href="#section-work">
                                    <div>My App</div>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-href="#section-coding">
                                    <div>Coding</div>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-href="#section-activities">
                                    <div>Activities</div>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-href="#section-research-map">
                                    <div>Research Map</div>
                                </a>
                            </li>
                            <!-- <li><a href="blog.html"><div>Blog</div></a></li> -->
                            <li>
                                <a href="#" data-href="#section-contact">
                                    <div>Contact Me</div>
                                </a>
                            </li>
                        </ul>

                        <!-- Top Search
						============================================= -->

                        <!-- #top-search end -->

                    </nav>
                    <!-- #primary-menu end -->

                </div>

            </div>

        </header>
        <!-- #header end -->

        <div class="clear"></div>

        <!-- Content
		============================================= -->
        <section id="content">

            <div class="content-wrap">
    @include('includes.videos')
    @include('includes.about')
    @include('includes.works')
    @include('includes.coding')
    @include('includes.activities')
    @include('includes.research-map')
    @include('includes.contact')

                <!-- Footer
		============================================= -->
                <footer id="footer" class="dark">

                    <div class="container">

                        <!-- Footer Widgets
				============================================= -->
                        <!-- <div class="footer-widgets-wrap clearfix">

                            <div class="col_two_third">

                                <div class="col_one_third">

                                    <div class="widget clearfix">

                                        <img src="images/footer-widget-logo.png" alt="" class="footer-logo">

                                        <p>We believe in
                                            <strong>Simple</strong>,
                                            <strong>Creative</strong> &amp;
                                            <strong>Flexible</strong> Design Standards.</p>

                                        <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                            <address>
                                                <strong>Headquarters:</strong>
                                                <br> 795 Folsom Ave, Suite 600
                                                <br> San Francisco, CA 94107
                                                <br>
                                            </address>
                                            <abbr title="Phone Number">
                                                <strong>Phone:</strong>
                                            </abbr> (91) 8547 632521
                                            <br>
                                            <abbr title="Fax">
                                                <strong>Fax:</strong>
                                            </abbr> (91) 11 4752 1433
                                            <br>
                                            <abbr title="Email Address">
                                                <strong>Email:</strong>
                                            </abbr> info@canvas.com
                                        </div>

                                    </div>

                                </div>

                                <div class="col_one_third">

                                    <div class="widget widget_links clearfix">

                                        <h4>Blogroll</h4>

                                        <ul>
                                            <li>
                                                <a href="http://codex.wordpress.org/">Documentation</a>
                                            </li>
                                            <li>
                                                <a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a>
                                            </li>
                                            <li>
                                                <a href="http://wordpress.org/extend/plugins/">Plugins</a>
                                            </li>
                                            <li>
                                                <a href="http://wordpress.org/support/">Support Forums</a>
                                            </li>
                                            <li>
                                                <a href="http://wordpress.org/extend/themes/">Themes</a>
                                            </li>
                                            <li>
                                                <a href="http://wordpress.org/news/">WordPress Blog</a>
                                            </li>
                                            <li>
                                                <a href="http://planet.wordpress.org/">WordPress Planet</a>
                                            </li>
                                        </ul>

                                    </div>

                                </div>

                                <div class="col_one_third col_last">

                                    <div class="widget clearfix">
                                        <h4>Recent Posts</h4>

                                        <div id="post-list-footer">
                                            <div class="spost clearfix">
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4>
                                                            <a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                                        </h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li>10th July 2014</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="spost clearfix">
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4>
                                                            <a href="#">Elit Assumenda vel amet dolorum quasi</a>
                                                        </h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li>10th July 2014</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="spost clearfix">
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4>
                                                            <a href="#">Debitis nihil placeat, illum est nisi</a>
                                                        </h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li>10th July 2014</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col_one_third col_last">

                                <div class="widget clearfix" style="margin-bottom: -20px;">

                                    <div class="row">

                                        <div class="col-lg-6 bottommargin-sm">
                                            <div class="counter counter-small">
                                                <span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span>
                                            </div>
                                            <h5 class="nobottommargin">Total Downloads</h5>
                                        </div>

                                        <div class="col-lg-6 bottommargin-sm">
                                            <div class="counter counter-small">
                                                <span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span>
                                            </div>
                                            <h5 class="nobottommargin">Clients</h5>
                                        </div>

                                    </div>

                                </div>

                                <div class="widget subscribe-widget clearfix">
                                    <h5>
                                        <strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp;
                                        Inside Scoops:</h5>
                                    <div class="widget-subscribe-form-result"></div>
                                    <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                                        <div class="input-group divcenter">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="icon-email2"></i>
                                                </div>
                                            </div>
                                            <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email"
                                                placeholder="Enter your Email">
                                            <div class="input-group-append">
                                                <button class="btn btn-success" type="submit">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="widget clearfix" style="margin-bottom: -20px;">

                                    <div class="row">

                                        <div class="col-lg-6 clearfix bottommargin-sm">
                                            <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <small style="display: block; margin-top: 3px;">
                                                    <strong>Like us</strong>
                                                    <br>on Facebook</small>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 clearfix">
                                            <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                                <i class="icon-rss"></i>
                                                <i class="icon-rss"></i>
                                            </a>
                                            <a href="#">
                                                <small style="display: block; margin-top: 3px;">
                                                    <strong>Subscribe</strong>
                                                    <br>to RSS Feeds</small>
                                            </a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        .footer-widgets-wrap end

                    </div> -->

                        <!-- Copyrights
			============================================= -->
                        <div id="copyrights">

                            <div class="container clearfix">

                                <div class="col_half">
                                    Copyrights &copy; 2018 All Rights Reserved by Hung-An Chen.
                                    <br>
                                    <div class="copyright-links">
                                        <a href="https://www.freeprivacypolicy.com/privacy/view/60bbaa2398633724a6f0177dc23df2f5" target="_blank">Privacy Policy for my app</a>
                                    </div>
                                </div>

                                <div class="col_half col_last tright">
                                    <div class="fright clearfix">
                                        <a href="https://www.facebook.com/profile.php?id=100003523100497" target="_blank" class="social-icon si-small si-borderless si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>

                                        <a href="https://twitter.com/alpschen05" target="_blank" class="social-icon si-small si-borderless si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>

                                        <a href="mailto:alpschen05@gmail.com" class="social-icon si-small si-borderless si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>

                                        <a href="https://www.instagram.com/ck_tzuan__/" target="_blank" class="social-icon si-small si-borderless si-instagram">
                                            <i class="icon-instagram2"></i>
                                            <i class="icon-instagram2"></i>
                                        </a>

                                        <a href="https://github.com/AlpsChen" target="_blank" class="social-icon si-small si-borderless si-github">
                                            <i class="icon-github"></i>
                                            <i class="icon-github"></i>
                                        </a>

                                    </div>

                                    <div class="clear"></div>

                                    <i class="icon-envelope2"></i> alpschen@gmail.com
                                    <span class="middot">&middot;</span>
                                    <i class="icon-headphones"></i> +886-923-387-201
                                </div>

                            </div>

                        </div>
                        <!-- #copyrights end -->

                </footer>
                <!-- #footer end -->

                </div>
                <!-- #wrapper end -->

                <!-- Go To Top
	============================================= -->
                <div id="gotoTop" class="icon-angle-up"></div>

                <!-- External JavaScripts
	============================================= -->
                <script src="{{asset('js/all.js')}}"></script>
                <script>
                    $(function () {
                        $(".desc").elimore({
                            maxLength: 170,
                            moreText: " Read More",
                            lessText: " Read Less"
                        });
                    });
                </script>

                <!-- Footer Scripts
	============================================= -->

</body>

</html>