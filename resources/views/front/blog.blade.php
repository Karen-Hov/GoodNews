@extends('layouts.SiteLayouts.index')
@section('styles')

@endsection
@section('navbar')
    @include('layouts.SiteLayouts.header')
@endsection

@section('content')
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status_1">
            <img src="{{asset('front/images/header/loader.gif')}}" id="preloader_image" alt="loader">
        </div>
    </div>
    <div class="ne_top_header_main_wrapper">
        <div class="container">
            <div class="ne_left_sec_main_wrapper">
                <div id="day_and_time">
                    <p id="date"></p>
                </div>
                <div class="ne_top_about_btn hidden-xs"> <a href="contact.html">contact us</a>
                </div>
            </div>
            <div class="ne_right_sec_main_wrapper">
                <ul>
                    <li class="hidden-xs"><a href="#">Subscribe</a>
                    </li>
                    <li class="hidden-xs"><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="hidden-xs"><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="hidden-xs"><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li class="hidden-xs"><a href="login.html">login &nbsp;<i class="fa fa-user"></i></a>
                    </li>
                    <li><a href="#" class="second-nav-toggler mee">menu &nbsp;<i class="flaticon-text"></i></a>
                    </li>
                </ul>
                <div id="mobile-nav" data-prevent-default="true" data-mouse-events="true">
                    <div class="mobail_nav_overlay"></div>
                    <div class="mobile-nav-box">
                        <div class="mobile-logo">
                            <a href="index.html" class="mobile-main-logo">
                                <img src="{{asset('front/images/header/logo4.png')}}" alt="logo" class="img-responsiv">
                            </a> <a href="#" class="manu-close"><i class="fa fa-times"></i></a>
                        </div>
                        <ul class="mobile-list-nav">
                            <li><a href="#">WORLD NEWS</a>
                            </li>
                            <li><a href="#">SPORT NEWS</a>
                            </li>
                            <li><a href="#">MUSIC NEWS</a>
                            </li>
                            <li><a href="#">BUSINESS NEWS</a>
                            </li>
                            <li><a href="#">TECHNOLOGICAL</a>
                            </li>
                            <li><a href="#">TRAVEL NEWS</a>
                            </li>
                            <li><a href="#">MECIAL NEWS</a>
                            </li>
                            <li><a href="#">WORLD NEWS</a>
                            </li>
                            <li><a href="#">SPORT NEWS</a>
                            </li>
                            <li><a href="#">MUSIC NEWS</a>
                            </li>
                            <li><a href="#">BUSINESS NEWS</a>
                            </li>
                            <li><a href="#">TECHNOLOGICAL</a>
                            </li>
                            <li><a href="#">TRAVEL NEWS</a>
                            </li>
                            <li><a href="#">MECIAL NEWS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs navigation Start -->
    <div class="prs_navigation_main_wrapper">
        <div class="container">
            <div class="serach-header">
                <div class="searchbox">
                    <button class="close">×</button>
                    <form>
                        <input type="search" placeholder="Search …">
                        <button type="submit"><i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="prs_navi_left_main_wrapper">
                <div class="prs_logo_main_wrapper">
                    <a href="index.html">
                        <img src="{{asset('front/images/header/logo.png')}}" alt="logo" class="img-responsive hidden-xs">
                        <img src="{{asset('front/images/header/logo.png')}}" alt="logo" class="visible-xs">
                    </a>
                </div>
                <div class="prs_menu_main_wrapper">
                    <nav class="navbar navbar-default">
                        <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                            <button class="dl-trigger">
                                <img src="{{asset('front/images/header/bars.png')}}" alt="bar_png')}}">
                            </button>
                            <div class="clearfix"></div>
                            <div class="searchd"><i class="fa fa-search"></i>
                            </div>
                            <ul class="dl-menu">
                                <li class="parent"><a href="#" class="effect_nav">home</a>
                                    <ul class="lg-submenu">
                                        <li><a href="index.html">Home-I</a>
                                        </li>
                                        <li><a href="index_II.html">Home-II</a>
                                        </li>
                                        <li><a href="index_III.html">Home-III</a>
                                        </li>
                                        <li><a href="index_IV.html">Home-IV</a>
                                        </li>
                                        <li><a href="index_dark.html">Home-V</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent megamenu"><a href="#" class="effect_nav">features</a>
                                    <ul class="lg-submenu">
                                        <li><a>Post Samples</a>
                                            <ul class="lg-submenu">
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Parallax</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Lightbox </a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Images </a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Video Post</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Self Hosted </a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Self Hosted </a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">SoundCloud</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Google Map</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a>Reviews</a>
                                            <ul class="lg-submenu">
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Stars</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Points</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Percent</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Position</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Position post</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Position Custom</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Best Reviews</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a>Shortcodes</a>
                                            <ul class="lg-submenu">
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Boxes</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Buttons</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Columns</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Social  </a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Tabs </a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Text Lists </a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Lightbox</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Content </a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Audio and Video</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a>Page Templates</a>
                                            <ul class="lg-submenu">
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Masonry </a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Media </a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Authors</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Blog List </a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Best Reviews</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Login Page </a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Sitemap Page</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Tags</a>
                                                </li>
                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Timeline page</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent megamenu"><a href="#" class="effect_nav"> sport </a>
                                    <ul class="lg-submenu prs_navi_video_wrapper">
                                        <li class=" prs_vp_hover_overlay">
                                            <div class="ne_re_left_top_main_wrapper">
                                                <div class="ne_re_left_img_main_wrapper">

                                                    <img src="{{asset('front/images/content/bs1.jpg')}}" alt="img">

                                                    <h2>Bussiness</h2>
                                                </div>
                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                    <h3><a href="#">Award of the year</a></h3>
                                                    <ul class="ne_re_social1_wrapper">
                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" prs_vp_hover_overlay">
                                            <div class="ne_re_left_top_main_wrapper">
                                                <div class="ne_re_left_img_main_wrapper">
                                                    <img src="{{asset('front/images/content/bs2.jpg')}}" alt="img">
                                                    <h2>technology</h2>
                                                </div>
                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                    <h3><a href="#">Google vote-shifting</a></h3>
                                                    <ul class="ne_re_social1_wrapper">
                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" prs_vp_hover_overlay">
                                            <div class="ne_re_left_top_main_wrapper">
                                                <div class="ne_re_left_img_main_wrapper">
                                                    <img src="{{asset('front/images/content/bs3.jpg')}}" alt="img">
                                                    <h2>travel</h2>
                                                </div>
                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                    <h3><a href="#">Tourism Dubai tourist</a></h3>
                                                    <ul class="ne_re_social1_wrapper">
                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" prs_vp_hover_overlay">
                                            <div class="ne_re_left_top_main_wrapper">
                                                <div class="ne_re_left_img_main_wrapper">
                                                    <img src="{{asset('front/images/content/bs4.jpg')}}" alt="img">
                                                    <h2>health</h2>
                                                </div>
                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                    <h3><a href="#">They are backed Kennedy </a></h3>
                                                    <ul class="ne_re_social1_wrapper">
                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent megamenu"><a href="#" class="effect_nav"> technology </a>
                                    <ul class="lg-submenu prs_navi_video_wrapper">
                                        <li class="prs_vp_hover_overlay">
                                            <div class="ne_re_left_top_main_wrapper">
                                                <div class="ne_re_left_img_main_wrapper">
                                                    <img src="{{asset('front/images/content/bs1.jpg')}}" alt="img">
                                                    <h2>health</h2>
                                                </div>
                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                    <h3><a href="#">They are backed Kennedy </a></h3>
                                                    <ul class="ne_re_social1_wrapper">
                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="prs_vp_hover_overlay">
                                            <div class="ne_re_left_top_main_wrapper">
                                                <div class="ne_re_left_img_main_wrapper">
                                                    <img src="{{asset('front/images/content/bs3.jpg')}}" alt="img">
                                                    <h2>travel</h2>
                                                </div>
                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                    <h3><a href="#">Tourism Dubai tourist</a></h3>
                                                    <ul class="ne_re_social1_wrapper">
                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="prs_vp_hover_overlay">
                                            <div class="ne_re_left_top_main_wrapper">
                                                <div class="ne_re_left_img_main_wrapper">
                                                    <img src="{{asset('front/images/content/bs2.jpg')}}" alt="img">
                                                    <h2>technology</h2>
                                                </div>
                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                    <h3><a href="#">Google vote-shifting</a></h3>
                                                    <ul class="ne_re_social1_wrapper">
                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="prs_vp_hover_overlay">
                                            <div class="ne_re_left_top_main_wrapper">
                                                <div class="ne_re_left_img_main_wrapper">
                                                    <img src="{{asset('front/images/content/bs1.jpg')}}" alt="img">
                                                    <h2>Bussiness</h2>
                                                </div>
                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                    <h3><a href="#">Award of the year</a></h3>
                                                    <ul class="ne_re_social1_wrapper">
                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#" class="effect_nav">pages</a>
                                    <ul class="lg-submenu">
                                        <li class="parent"><a href="#">Blog</a>
                                            <ul class="lg-submenu">
                                                <li><a href="blog.html">Blog-Category</a>
                                                </li>
                                                <li><a href="blog_single.html">Blog-Single</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a href="#">Gallery</a>
                                            <ul class="lg-submenu">
                                                <li><a href="gallery.html">Gallery</a>
                                                </li>
                                                <li><a href="gallery_single.html">Gallery-Single</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="404.html">404_error</a>
                                        </li>
                                        <li><a href="life_style.html">Life-Style</a>
                                        </li>
                                        <li><a href="sport.html">Sport</a>
                                        </li>
                                        <li><a href="technology.html">Technology</a>
                                        </li>
                                        <li><a href="author.html">Author</a>
                                        </li>
                                        <li><a href="login.html">Login</a>
                                        </li>
                                        <li><a href="register.html">Register</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="contact.html" class="effect_nav">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /dl-menuwrapper -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- prs navigation End -->
    <!-- ne inner title start -->
    <div class="ne_inner_title_main_section">
        <div class="ne_inner_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
                    <div class="ne_ts_inner_wrapper ne_ts_title_inner_wrapper">
                        <div class="ne_tran_label_wrapper">
                            <h3>Trending</h3>
                        </div>
                        <div class="ne_tranding_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="ne_ts_inner_content">
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                        <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ne_ts_inner_content">
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                        <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ne_ts_inner_content">
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                        <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ne_inner_title_nev_wrapper">
                        <ul>
                            <li><i class="fa fa-home"></i> <a href="#">Home</a>&nbsp;&nbsp; ></li>
                            <li><i class="fa fa-folder-open"></i> CWG 2020 from today</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ne inner title End -->
    <!--resent news Start-->
    <div class="ne_recent_news_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="ne_recent_left_side_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_lifestyle">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>CWG today</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_sport_slider_wrapper ne_sport_slider_wrapper_inner_blog">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper yellow">
                                                            <img src="{{asset('front/images/content/swg1.jpg')}}" alt="img">
                                                            <h2>style</h2>
                                                        </div>
                                                        <div class="ne_re_left_img_cont_main_wrapper ne_re_left_img_cont_main_swg_blog_cont_wrapper">
                                                            <h3><a href="#">CWG 2020 from today</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                                </li>
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                                </li>
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                                </li>
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>
                                                                </li>
                                                            </ul>
                                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. This is Photoshc sagittis sem nibh id elit. Duis sed odvulputate cursus a sit amet mauris. This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit nec auctor aliquet. ean sollicitudin
                                                                <br>
                                                                <br> lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquesollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="ne_blog_today_img_left_wrapper">
                                                        <img src="{{asset('front/images/content/swg2.jpg')}}" alt="img">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="ne_blog_today_img_cont_left_wrapper">
                                                        <h3>Award of the year</h3>
                                                        <p>auctor, nisi elit consequat ipsum, nec sem nibh id elit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor,onsepsuec Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sem nibh id elit.Aenean sollibendum auctor,onsean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row margin-top-60 hidden-sm hidden-xs">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="ne_blog_today_img_cont_left_wrapper ne_blog_today_img_cont_left_wrapper_bottom">
                                                        <h3>Award of the year</h3>
                                                        <p>auctor, nisi elit consequat ipsum, nec sem nibh id elit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor,onsepsuec Aenean sollicitudin, lorem quis bibendum auctor, elit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibi elit eneaollicitudin, lorem quis bibendum</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="ne_blog_today_img_left_wrapper">
                                                        <img src="{{asset('front/images/content/swg3.jpg')}}" alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row visible-xs visible-sm margin-top-60">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="ne_blog_today_img_left_wrapper">
                                                        <img src="{{asset('front/images/content/swg3.jpg')}}" alt="img">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="ne_blog_today_img_cont_left_wrapper">
                                                        <h3>Award of the year</h3>
                                                        <p>auctor, nisi elit consequat ipsum, nec sem nibh id elit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor,onsepsuec Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sem nibh id elit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor,onsepsuec nibh id elit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="pager_wrapper prs_blog_pagi_wrapper">
                                            <ul class="pagination">
                                                <li><a href="#"><i class="fa fa-angle-left"></i></a>
                                                </li>
                                                <li class="btc_shop_pagi"><a href="#">01</a>
                                                </li>
                                                <li class="btc_shop_pagi"><a href="#">02</a>
                                                </li>
                                                <li class="btc_third_pegi btc_shop_pagi"><a href="#">03</a>
                                                </li>
                                                <li class="hidden-xs btc_shop_pagi"><a href="#">04</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
                                        <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_lifestyle_heading">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>Sharing is Caring</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
                                        <div class="ne_blog_sidebar_shair_icon_main_wrapper">
                                            <div class="btc_blog_cate_inner_social_fb_wrapper"> <a href="#"><i class="fa fa-facebook"></i><br> 4.1 M<br>Fans</a>
                                            </div>
                                            <div class="btc_blog_cate_inner_social_tw_wrapper"> <a href="#"><i class="fa fa-twitter"></i><br> 178<br>Followers</a>
                                            </div>
                                            <div class="btc_blog_cate_inner_social_gp_wrapper"> <a href="#"><i class="fa fa-google-plus"></i><br> 884.0 K<br>Followers</a>
                                            </div>
                                            <div class="btc_blog_cate_inner_social_vimo_wrapper"> <a href="#"><i class="fa fa-vimeo"></i><br> 323 K<br>Subscriber</a>
                                            </div>
                                            <div class="btc_blog_cate_inner_social_yt_wrapper"> <a href="#"><i class="fa fa-youtube-play"></i><br> 323 K<br>Subscriber</a>
                                            </div>
                                            <div class="btc_blog_cate_inner_social_shair_wrapper"> <a href="#"><i class="fa fa-share-alt"></i><br> 7.4 K<br>Followers</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_lifestyle_heading">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>About Author</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_blogto_testi_slider_wrapper">

                                            <div class="ne_boto_testi_content_wrapper">
                                                <div class="ne_boto_testi_img">
                                                    <img src="{{asset('front/images/content/blog_tesi_img.jpg')}}" alt="img">
                                                </div>
                                                <div class="ne_boto_testi_img_cont">
                                                    <h3><a href="#">Miss. Lisa Doe</a></h3>
                                                    <p class="ddddd"><a href="#"><i class="fa fa-user"></i> Administrator</a></p>
                                                    <h4>Phasellus eu scelerisque nisi. Nunc odio justo, laoreetarius antet pulvinar vulputate ligula. Maecenas nec justo cinia, luctus Maecenas justo. Maecenas dolor.</h4>
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_lifestyle_heading">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>leave a comment</h2>
                                            </div>
                                        </div>
                                        <div class="ne_comment_list_wrapper">
                                            <ul>
                                                <li><a href="#">3 Comments</a>
                                                </li>
                                                <li><a href="#">New 24 Template</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ne_comment_list_wrapper2">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart"></i> Recommend</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ne_comment_list_main_secton_wrapper ne_comment_list_main_secton_wrapper1">
                                            <div class="ne_commnet_list_img_section">
                                                <img src="{{asset('front/images/content/bl1.jpg')}}" alt="img">
                                            </div>
                                            <div class="ne_commnet_list_img_cont_section">
                                                <h3>Vijay parmar</h3>
                                                <p>I believe Wolf SilverOak still sees the camera icon because he is allowing customers to post to his page and also has photos....<span><a href="#">See More</a></span>
                                                </p>
                                                <ul>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-share-alt"></i> &nbsp;Share</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-reply"></i> &nbsp;reply</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ne_comment_list_main_secton_wrapper ne_comment_list_main_secton_wrapper2">
                                            <div class="ne_commnet_list_img_section">
                                                <img src="{{asset('front/images/content/bl2.jpg')}}" alt="img">
                                            </div>
                                            <div class="ne_commnet_list_img_cont_section">
                                                <h3>Vijay parmar</h3>
                                                <p>I believe Wolf SilverOak still sees the camera icon because he is allowing customers to post to his page and also has photos....<span><a href="#">See More</a></span>
                                                </p>
                                                <ul>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-share-alt"></i> &nbsp;Share</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-reply"></i> &nbsp;reply</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ne_comment_list_main_secton_wrapper ne_comment_list_main_secton_wrapper2">
                                            <div class="ne_commnet_list_img_section">
                                                <img src="{{asset('front/images/content/bl3.jpg')}}" alt="img">
                                            </div>
                                            <div class="ne_commnet_list_img_cont_section">
                                                <h3>Vijay parmar</h3>
                                                <p>I believe Wolf SilverOak still sees the camera icon because he is allowing customers to post to his page and also has photos....<span><a href="#">See More</a></span>
                                                </p>
                                                <ul>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-share-alt"></i> &nbsp;Share</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-reply"></i> &nbsp;reply</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="ne_busness_main_slider_wrapper">
                                                    <div class="ne_recent_heading_main_wrapper">
                                                        <h2>Business</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="ne_businees_slider_wrapper">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('front/images/content/bs1.jpg')}}" alt="img">
                                                                    <h2>business</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                                    <h3><a href="#">Proin gravida nibh
                                                                            vel velit auctor.</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('front/images/content/bs2.jpg')}}" alt="img">
                                                                    <h2>team work</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                                    <h3><a href="#">Faangs diverge prospect</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('front/images/content/bs3.jpg')}}" alt="img">
                                                                    <h2>business</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                                    <h3><a href="#">
                                                                            Beats did something today</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="ne_indx_sidebar_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper ne_sidebar_inner_social_wrapper_hide_res_weather
								ne_sidebar_lifestyle_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Today weather</h2>
                                    </div>
                                    <div class="ne_weather_inner_wrapper">
                                        <div id="current" class="wrapper">
                                            <h1 class="location">Chicago, IL</h1>
                                            <h2 class="date">Sunday, January 1, 2020</h2>
                                            <p class="weather_img">
                                                <img src="{{asset('front/images/content/weather_img.png')}}" alt="weather">
                                            </p>
                                            <p class="temp">72</p>
                                            <p class="conditions">Sunny</p>
                                        </div>
                                        <!-- Future Forecast -->
                                        <div id="future" class="wrapper">
                                            <div class="container">
                                                <h3 class="day">Mon</h3>
                                                <p class="weather_img2">
                                                    <img src="{{asset('front/images/content/weather_img2.png')}}" alt="weather">
                                                </p>
                                                <p class="tempRange"><span class="high">64</span> <span class="low">48</span>
                                                </p>
                                            </div>
                                            <div class="container">
                                                <h3 class="day">Tue</h3>
                                                <p class="weather_img2">
                                                    <img src="{{asset('front/images/content/weather_img3.png')}}" alt="weather">
                                                </p>
                                                <p class="tempRange"><span class="high">57</span> <span class="low">45</span>
                                                </p>
                                            </div>
                                            <div class="container">
                                                <h3 class="day">Wed</h3>
                                                <p class="weather_img2">
                                                    <img src="{{asset('front/images/content/weather_img4.png')}}" alt="weather">
                                                </p>
                                                <p class="tempRange"><span class="high">63</span> <span class="low">59</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Latest News</h2>
                                    </div>
                                    <div class="ne_lns_slider_wrapper ne_ln_main_sidebar_slider_wrapper">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="ne_wn_img_main_wrapper ne_ln_inner_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                    <div class="ne_wn_img_overlay"></div>
                                                    <h2>sport</h2>
                                                    <div class="ne_wn_social_inner_wrapper">
                                                        <h3><a href="#">The clock is ticking </a></h3>
                                                        <ul class="ne_wn_social1_wrapper">
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                            </li>
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="ne_wn_img_main_wrapper ne_ln_inner_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                    <div class="ne_wn_img_overlay"></div>
                                                    <h2>sport</h2>
                                                    <div class="ne_wn_social_inner_wrapper">
                                                        <h3><a href="#">Award of the year</a></h3>
                                                        <ul class="ne_wn_social1_wrapper">
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                            </li>
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="ne_wn_img_main_wrapper ne_ln_inner_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                    <div class="ne_wn_img_overlay"></div>
                                                    <h2>sport</h2>
                                                    <div class="ne_wn_social_inner_wrapper">
                                                        <h3><a href="#">The clock is ticking </a></h3>
                                                        <ul class="ne_wn_social1_wrapper">
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                            </li>
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class="ne_sidebar_cate_list_wrappper">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;World <span>10245</span></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;Travel <span>2025</span>
                                                </a></li>
                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;Health <span>30503</span>
                                                </a></li>
                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;Lifestyle <span>50014</span>
                                                </a></li>
                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;Sports <span>2545</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Advertising</h2>
                                    </div>
                                    <div class="ne_sidebar_advertize_main_wrapper">
                                        <a href="#">
                                            <img src="{{asset('front/images/content/advertiz.jpg')}}" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('front/images/content/pc1.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">Etiam dignissim aliquet sed.</a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('front/images/content/pc2.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">Google shifting threatens aliquet</a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('front/images/content/pc3.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">
                                                    Beats did some thing today</a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('front/images/content/pc4.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">
                                                    Hands on with the Apple </a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('front/images/content/pc5.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">Etiam dignissim velit sed.</a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--resent news End-->
    <!-- prs patner slider Start -->
    <div class="prs_patner_main_section_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_pn_slider_wraper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('front/images/content/p1.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('front/images/content/p2.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('front/images/content/p3.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('front/images/content/p4.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('front/images/content/p5.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('front/images/content/p6.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs patner slider End -->

@endsection

@section('footer')
    @include('layouts.SiteLayouts.footer')
@endsection

@section('scripts')

@endsection
