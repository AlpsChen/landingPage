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
                    </div>
                </footer>
                <!-- #footer end -->

            </div>
            <!-- #wrapper end -->

            <!-- Go To Top
	============================================= -->
            <div id="gotoTop" class="icon-angle-up"></div>

        </section>

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