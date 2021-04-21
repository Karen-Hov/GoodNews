@extends('layouts.SiteLayouts.index')
@section('styles')

@endsection
@section('navbar')
    @include('layouts.SiteLayouts.header')
@endsection

@section('content')

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
                                        <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ne_ts_inner_content">
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                        <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ne_ts_inner_content">
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                        <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</h3>
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
                            <li><i class="fa fa-folder-open"></i> Photo Gallary</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ne inner title End -->
    <!-- prs gallery wrapper Start -->
    <div class="prs_gallery_main_section_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_gallery">
                        <div class="ne_recent_heading_main_wrapper">
                            <h2>photo gallary</h2>
                        </div>
                    </div>
                </div>
                <div class="portfolio-area ptb-100">
                    <div class="container">
                        <div class="portfolio-filter clearfix text-center">
                            <ul class="list-inline" id="filter">
                                <li><a class="active" data-group="all">All</a>
                                </li>
                                <li><a data-group="business">politics</a>
                                </li>
                                <li><a data-group="website"> technology</a>
                                </li>
                            </ul>
                        </div>
                        <div class="row three-column">
                            <div id="gridWrapper" class="clearfix">
                                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "website", "logo"]'>
                                    <div class="portfolio-thumb">
                                        <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                            <img src="{{asset('front/images/content/gallery/g1.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                            <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g1.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.portfolio-thumb -->
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "photoshop"]'>
                                    <div class="portfolio-thumb">
                                        <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                            <img src="{{asset('front/images/content/gallery/g2.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                            <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g2.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.portfolio-thumb -->
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "logo", "photoshop"]'>
                                    <div class="portfolio-thumb">
                                        <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                            <img src="{{asset('front/images/content/gallery/g3.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                            <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g3.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.portfolio-thumb -->
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "logo", "website", "business"]'>
                                    <div class="portfolio-thumb">
                                        <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                            <img src="{{asset('front/images/content/gallery/g4.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                            <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g4.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.portfolio-thumb -->
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "photoshop"]'>
                                    <div class="portfolio-thumb">
                                        <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                            <img src="{{asset('front/images/content/gallery/g5.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                            <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g5.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.portfolio-thumb -->
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "logo"]'>
                                    <div class="portfolio-thumb">
                                        <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                            <img src="{{asset('front/images/content/gallery/g6.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                            <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g6.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.portfolio-thumb -->
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "logo"]'>
                                    <div class="portfolio-thumb">
                                        <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                            <img src="{{asset('front/images/content/gallery/g7.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                            <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g7.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.portfolio-thumb -->
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "logo"]'>
                                    <div class="portfolio-thumb">
                                        <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                            <img src="{{asset('front/images/content/gallery/g8.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                            <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g8.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.portfolio-thumb -->
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "logo"]'>
                                    <div class="portfolio-thumb">
                                        <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                            <img src="{{asset('front/images/content/gallery/g9.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                            <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g9.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.portfolio-thumb -->
                                </div>
                            </div>
                            <!--/#gridWrapper-->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="pager_wrapper prs_blog_pagi_wrapper ne_gallery_pagi_main_weapper">
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
                        </div>
                    </div>
                    <!-- /.container -->
                </div>
                <!--/.portfolio-area-->
            </div>
        </div>
    </div>
    <!-- prs gallery wrapper End -->
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

    <script>
        /* 09. VENOBOX JS */
        $('.venobox').venobox({
            numeratio: true,
            titleattr: 'data-title',
            titlePosition: 'top',
            spinner: 'wandering-cubes',
            spinColor: '#007bff'
        });
    </script>


@endsection

@section('footer')
    @include('layouts.SiteLayouts.footer')
@endsection

@section('scripts')

@endsection
