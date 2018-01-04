@extends('theme.layouts.app')
@section('pageTitle')
@section('content')

    <link rel='stylesheet' id='js_composer_front-css' href='css/js_composer.min3c21.css?ver=5.1.1' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='acoda-style-css' href='css/9efed1147ce1f757e78ec38f898d6a79.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='font-awesome-css' href='css/font-awesome.min3c21.css?ver=5.1.1' type='text/css'
          media='all'/>
    <script type='text/javascript' src='js/jqueryb8ff.js?ver=1.12.4'></script>
    <script type='text/javascript' src='js/jquery-migrate.min330a.js?ver=1.4.1'></script>
    <script type='text/javascript' src='js/acoda_typewriter.min33a6.js?ver=4.9'></script>
    <script type='text/javascript' src='js/jquery.themepunch.tools.min78d9.js?ver=5.4.3.1'></script>
    <script type='text/javascript' src='js/jquery.themepunch.revolution.min78d9.js?ver=5.4.3.1'></script>
    <script type='text/javascript' src='js/core.mine899.js?ver=1.11.4'></script>
    <script type='text/javascript' src='js/effect.mine899.js?ver=1.11.4'></script>

    {{--<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" type = 'text/css'>--}}
    {{--<script rel='stylesheet' src="jquery/dist/jquery.min.js" ></script>--}}
    {{--<script rel='stylesheet' src="bootstrap/dist/js/bootstrap.min.js"></script>--}}


    <!--[if lt IE 9]>
    <script type='text/javascript'
            src='http://you.acoda.com/agency-wordpress-theme/wp-content/themes/you/js/respond.min.js?ver=4.9'></script>
    <![endif]-->
    <link rel='https://api.w.org/' href='../wp-json/index.html'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 4.9"/>
    <link rel="canonical" href="index.html"/>
    <link rel='shortlink' href='../index2df4.html?p=8'/>
    <link rel="alternate" type="application/json+oembed"
          href="../wp-json/oembed/1.0/embeddd70.json?url=http%3A%2F%2Fyou.acoda.com%2Fagency-wordpress-theme%2Fcase-studies%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="../wp-json/oembed/1.0/embedc3a9?url=http%3A%2F%2Fyou.acoda.com%2Fagency-wordpress-theme%2Fcase-studies%2F&amp;format=xml"/>
    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }</style>
    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css"
          href="http://you.acoda.com/agency-wordpress-theme/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css"
          media="screen"><![endif]-->
    <meta name="generator"
          content="Powered by Slider Revolution 5.4.3.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>
    <link rel="icon" href="images/cropped-you-siteicon-32x32.png" sizes="32x32"/>
    <link rel="icon" href="images/cropped-you-siteicon-192x192.png" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="images/cropped-you-siteicon-180x180.png"/>
    <meta name="msapplication-TileImage" content="images/cropped-you-siteicon-270x270.png"/>
    <script type="text/javascript">function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function (e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({height: f})
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };</script>
    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1474872815957 {
            padding-top: 140px !important;
            padding-bottom: 140px !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1474874267350 {
            padding-top: 140px !important;
            padding-bottom: 200px !important;
            background-image: url(http://you.acoda.com/demo-2/wp-content/uploads/sites/2/2015/11/photodune-9545549-polaroid-icon-symbol-l.jpg?id=756) !important;
        }

        .vc_custom_1474872674725 {
            padding-top: 140px !important;
            padding-bottom: 140px !important;
            background-color: #ff8f8b !important;
        }

        .vc_custom_1474872646014 {
            padding-top: 150px !important;
            padding-bottom: 150px !important;
        }</style>

    <div id="custom-layer1-color" class="custom-layer"></div>
    <div id="custom-layer1" class="custom-layer"></div>
    <div itemscope itemtype="http://schema.org/Article" id="primary-wrapper"
         class="layout-wide page_layout_one  dir-nav-icon  animate-3d">
        <div class="site-inwrap clearfix">
            <a id="top"></a>
            <div id="main-wrap" role="main">
                <div class="main-wrap skinset-main acoda-skin clearfix ">
                    <div class="content-wrap row">
                        <div id="content" class="columns large-12 layout_one">
                            <article id="post-8" class="post-8 page type-page status-publish hentry">
                                <section class="entry">

                                    @foreach($allPost as $post)
                                        @if($post->position == 1 && $post->active == 1)
                                    <div class="vc_row wpb_row row vc_row-parent vc_custom_1474872815957 vc_row-o-content-middle">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h1><span
                                                                        class="xlarge-text text_linkcolor">{{$post->title}}</span>
                                                            </h1>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h3><span class="xlarge-text">{{$post->sub_title}}<span
                                                                            class="text_linkcolor"> </span></span></h3>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 15px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        @endif
                                    @endforeach




                                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                                         data-vc-stretch-content="true"
                                         class="vc_row wpb_row row vc_row-parent vc_custom_1474874267350 stretch_row_content stretch_content custom-row vc_row-o-content-middle">
                                        <div data-vc-parallax-image="http://you.acoda.com/demo-2/wp-content/uploads/sites/2/2015/11/photodune-9545549-polaroid-icon-symbol-l.jpg?id=756"
                                             data-vc-parallax="1.5" class="vc_general vc_parallax vc_parallax-yes"></div>
                                        <div class="overlay-wrap" style="background-color:rgba(249,249,249,0.3)"></div>
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="row-shape-wrap top  " style="height:80px">
                                                        <svg width="100%" height="80px">
                                                            <defs>
                                                                <pattern id="flexishape-5a137f04a95f5"
                                                                         preserveAspectRatio="none"
                                                                         patternUnits="userSpaceOnUse" x="0" y="0"
                                                                         width="100%" height="800px" viewBox="0 0 100 1000">
                                                                    <polygon fill="#ffffff" points="0,0 100,0 100,100  "/>
                                                                </pattern>
                                                            </defs>
                                                            <rect x="0" y="0" width="100%" height="80px"
                                                                  fill="url(#flexishape-5a137f04a95f5)"></rect>
                                                        </svg>
                                                    </div>
                                                    <div id="grid-5a137f04a9888"
                                                         class="gallery-wrap grid-gallery fluid-gutter acoda-skin column_padding masonry  click filter">

                                                        <div class="splitter-wrap">
                                                            <ul class="splitter id-5a137f04a9888">
                                                                <li>
                                                                    <span class="filter-text">Filter By: </span>
                                                                    <ul>
                                                                        <li class="segment-1 selected-1 active"><a href="#"
                                                                                                                   data-value="all">All</a>
                                                                        </li>
                                                                        @foreach($allCate as $cate)
                                                                            @if($cate->active == 1)
                                                                        <li class="segment-2"><a href="#Print"
                                                                                                 data-value="{{$cate->id}}">{{$cate->name}}</a>
                                                                        </li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="dynamic-frame row clearfix">
                                                            @foreach($listPostMiddle as $post)
                                                                @if($post->active == 1)
                                                                <div class="grid-sizer columns large-4"></div>

                                                                <div class="panel block columns acoda-animate-in large-4 {{$post->category_id}} "
                                                                     data-id="id-1">
                                                                    <div class="panel-inner">
                                                                        <div class="container   "
                                                                             style=&quot;max-width:1024px&quot;>
                                                                            <div class="gridimg-wrap  ih-item square effect15 right_to_left effect">
                                                                                <div class="inner-wrap">
                                                                                    <div class="img"><span
                                                                                                class="action-hover"></span><img
                                                                                                src="images/posts/{{$post->image}}"
                                                                                                width="1024" height="683" alt=""/>
                                                                                    </div>
                                                                                    <div class="info ">
                                                                                        <div class="info-back">
                                                                                            <div class="info-holder">
                                                                                                <h3>
                                                                                                    <h3 ><a href="images/posts/{{$post->image}}" data-fancybox-group="gallery5a18d845eb405" data-title="{{$post->title}}" data-caption="{{$post->content}}" class="fancybox ">{{$post->title}}</a></h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- / gridimg-wrap -->
                                                                            </div>
                                                                        </div><!-- / container -->
                                                                    </div><!--  / panel-inner -->
                                                                </div><!--  / panel -->
                                                                @endif
                                                            @endforeach

                                                        </div>

                                                        <div class="clear"></div>
                                                    </div><!-- /gallery-wrap -->
                                                    <div class="row-shape-wrap bottom  " style="height:80px">
                                                        <svg width="100%" height="80px">
                                                            <defs>
                                                                <pattern id="flexishape-5a137f05176ee"
                                                                         preserveAspectRatio="none"
                                                                         patternUnits="userSpaceOnUse" x="0" y="0"
                                                                         width="100%" height="800px" viewBox="0 0 100 1000">
                                                                    <polygon fill="#ff8e89" points="0,100 100,100 100,0  "/>
                                                                </pattern>
                                                            </defs>
                                                            <rect x="0" y="0" width="100%" height="80px"
                                                                  fill="url(#flexishape-5a137f05176ee)"></rect>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @foreach($allPost as $post)
                                        @if($post->position == 3 && $post->active == 1)
                                    <div class="vc_row-full-width"></div>
                                    <div data-vc-full-width="true" data-vc-full-width-init="false" style="color:#ffffff;"
                                         class="vc_row wpb_row row vc_row-parent vc_custom_1474872674725 vc_row-o-content-middle">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h2><span class="xlarge-text">{{$post->title}}</span>
                                                            </h2>
                                                            <h3>{{$post->sub_title}}</h3>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        @endif
                                    @endforeach
                                    <div class="vc_row-full-width"></div>
                                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                                         class="vc_row wpb_row row vc_row-parent vc_custom_1474872646014 vc_row-o-content-middle">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="row-shape-wrap top  " style="height:80px">
                                                        <svg width="100%" height="80px">
                                                            <defs>
                                                                <pattern id="flexishape-5a137f05190e4"
                                                                         preserveAspectRatio="none"
                                                                         patternUnits="userSpaceOnUse" x="0" y="0"
                                                                         width="100%" height="800px" viewBox="0 0 100 1000">
                                                                    <polygon fill="#ff8e89" points="0,0 100,0 100,100  "/>
                                                                </pattern>
                                                            </defs>
                                                            <rect x="0" y="0" width="100%" height="80px"
                                                                  fill="url(#flexishape-5a137f05190e4)"></rect>
                                                        </svg>
                                                    </div>
                                                    <div class="row-shape-wrap top static " style="height:120px">
                                                        <svg id="flexishape-5a137f05191ef" x="0px" y="0px" fill="#ff8e89"
                                                             viewBox="0 0 100 100" width="100px" height="120px"
                                                             preserveAspectRatio="none">
                                                            <polygon fill="#ff8e89" points="100,0 50,100 0,0  "/>
                                                        </svg>
                                                    </div>
                                                    <div class="vc_btn3-container  wpb_animate_when_almost_visible wpb_pulse pulse vc_btn3-center">
                                                        <a class="vc_general vc_btn3 vc_btn3-size-xlg vc_btn3-shape-square vc_btn3-style-flat vc_btn3-icon-right vc_btn3-color-link_color"
                                                           href="{{route('contact.show')}}" title="">GET IN TOUCH <i
                                                                    class="vc_btn3-icon fa fa-long-arrow-right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width"></div>

                                </section><!-- /entry -->


                                <!--  panel -->


                            </article>
                        </div><!-- #content -->
                        <div class="clear"></div>
                    </div><!-- /content-wrap -->
                    <footer id="footer-wrap" class="skinset-footer acoda-skin">
                        <div id="footer" class="clearfix row" role="contentinfo" itemscope="itemscope"
                             itemtype="http://schema.org/WPFooter">
                            <div class="content">
                                <div class="block columns large-12 last">
                                    <ul></ul>
                                </div>
                            </div><!-- / row -->
                        </div><!-- / footer -->
                        <div class="footer-filler"></div>
                    </footer><!-- / footer-wrap -->
                    <div class="autototop"><a href="#"><i class="fa fa-angle-up fa-lg"></i></a></div>
                </div><!-- /.main-wrap -->
            </div><!-- /#main-wrap -->
            <!-- I would like to give a great thankyou to WordPress for their amazing platform -->
            <!-- Theme Design by ACODA - http://acoda.com -->
        </div><!-- /.site-inwrap -->
        <div class="acoda-spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div><!-- /#primary-wrapper -->
    <link rel='stylesheet' id='acoda-skin-css' href='css/ca781558a3151731055b49fe0f1e13fe.css' type='text/css' media='all'/>
    <style id='acoda-skin-inline-css' type='text/css'>
        #custom-layer1 {
            background-size: cover;
            background-color: #ffffff;
        }

        .skinset-background.acoda-skin {
            color: #3c3c3c;
        }

        .skinset-background div.item-list-tabs ul li a, .skinset-background .widget ul li.current_page_item a, .skinset-background div.post-metadata a, .skinset-background .commentlist .comment-author a, .skinset-background .recent-metadata a, .skinset-background .post-metadata a, .skinset-background .widget.widget_pages li a, .skinset-background .widget.widget_nav_menu li a, .skinset-background .widget.widget_recent_entries li a, .skinset-background #content span.price, .skinset-background #content span.amount, .skinset-background ul.products li.product h3 {
            color: #3c3c3c;
        }

        .skinset-background .blockquote_line, .skinset-background blockquote, .skinset-background .button.vc_btn_outlined:hover, .skinset-background .button.vc_btn_square_outlined:hover, .skinset-background .vc_sep_color_link_color .vc_sep_line {
            border-color: #ff9291 !important;
        }

        .skinset-background a, .skinset-background #sub-tabs i, .skinset-background .current_page_item > a, .skinset-background .current-menu-item > a, .skinset-background .current-menu-ancestor > a, .skinset-background #content .cart-collaterals .cart_totals .total, .skinset-background #content .cart-collaterals .cart_totals .cart-subtotal, .skinset-background #content .cart-collaterals .cart_totals span.amount, .skinset-background #content div.product .stock, .skinset-background span.text_linkcolor, .skinset-background span.white-text a:hover, .skinset-background .commentlist .comment-author h6, .skinset-background .commentlist .comment-author h6 a, .skinset-background .list.link_color li:before {
            color: #ff9291;
        }

        .skinset-background a:hover, .skinset-background a:active, .skinset-background a.waypoint_active, .skinset-background .post-metadata a:hover, .skinset-background nav.pagination .page-numbers.current, .skinset-background ul.post-metadata-wrap a:hover, .skinset-background .widget.widget_pages li a:hover, .skinset-background .widget.widget_nav_menu li a:hover, .skinset-background .widget.widget_recent_entries li a:hover, .skinset-background .widget.widget_pages a, .skinset-background .gallery-wrap .slidernav-left:hover a, .skinset-background .gallery-wrap .slidernav-right:hover a, .skinset-background .zoomflow .controlsCon > .arrow-left:hover i, .skinset-background .zoomflow .controlsCon > .arrow-right:hover i, .skinset-background .control-panel li a:hover, .skinset-background .info .info-back a:hover, .skinset-background .post-like a.liked i, .skinset-background span.text_linkhovercolor, .skinset-background span.text_linkhovercolor a, .skinset-background nav.pagination > .page-numbers, .skinset-background .acoda-ajax-loading:after, .skinset-background .wpb_content_element .wpb_wrapper .ui-state-active a, .skinset-background .gallery-wrap .ih-item .info a:hover, .skinset-background .vc_btn3.vc_btn3-style-outline.text_only:hover, .skinset-background .page-numbers.current {
            color: #3c3c3c;
        }

        .skinset-background h1, .skinset-background h1 a, .skinset-background h2, .skinset-background h2 a, .skinset-background h3, .skinset-background h3 a, .skinset-background h4, .skinset-background h4 a, .skinset-background h5, .skinset-background h5 a, .skinset-background h6, .skinset-background h6 a, .skinset-background .blockquote_line, .skinset-background blockquote, .skinset-background .vc_tta.vc_general .vc_tta-tab > a, .skinset-background .vc_pie_chart_value, .skinset-background .heading-font, .skinset-background .widget-title, .skinset-background .bbp-topic-title a.bbp-topic-permalink, .skinset-background .bbp-forum-title {
            font-family: Montserrat;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: -0.05em;
            font-style: normal;
        }

        .skinset-background h1, .skinset-background h1 a {
            line-height: 1.1;
        }

        .skinset-background h2, .skinset-background h2 a {
            line-height: 1.1;
        }

        .skinset-background h3, .skinset-background h3 a {
            line-height: 1.1;
        }

        @media only screen and (min-width: 64.063em) {
            .skinset-background h1 {
                font-size: 4rem;
            }

            .skinset-background h2 {
                font-size: 3rem;
            }
        }

        .skinset-background {
            font-style: normal;
            font-family: Roboto;
            font-weight: 300;
            letter-spacing: .5px;
        }

        .skinset-background .dock-tab span.items-count, .skinset-background span.highlight.one, .skinset-background .commentlist .reply a, .skinset-background div.header-infobar, .skinset-background div.item-list-tabs ul li a span, .skinset-background .widget_display_stats dd strong, .skinset-background div#message.updated, .skinset-background input[type="button"], .skinset-background button, .skinset-background submit, .skinset-background input[type="submit"], .skinset-background a.button, .skinset-background .button-wrap .button.link_color a, .skinset-background button.button, .skinset-background input.button, .skinset-background #review_form #submit, .skinset-background .woocommerce-info:before, .skinset-background span.onsale, .skinset-background .vc_general.vc_btn3-color-link_color, .skinset-background span.fonticon.background, .skinset-background a.action-icons i, .skinset-background .color .socicons.social-email a, .skinset-background .color_hover .socicons.social-email a:hover, .skinset-background .vc_toggle_title h4:before, .skinset-background span.portfolio-link, .skinset-background span.action-hover {
            background-color: #ff9291;
        }

        .skinset-background input[type="submit"]:hover, .skinset-background input[type="button"]:hover, .skinset-background a.button:hover, .skinset-background span.highlight, .skinset-background button.button:hover, .skinset-background .vc_general.vc_btn3-color-link_color:focus, .skinset-background .vc_general.vc_btn3-color-link_color:hover, .skinset-background .post.sticky .entry > h2:before, .skinset-background .status-sticky .entry > h2:before, .skinset-background .comments-value, .skinset-background .acoda-spinner .dot1, .skinset-background .acoda-spinner .dot2, .skinset-background .acoda-spinner .dot3 {
            background-color: #3c3c3c;
        }

        .skinset-background ::selection {
            background-color: #3c3c3c;
        }

        .skinset-background ::-moz-selection {
            background-color: #3c3c3c;
        }

        .skinset-background .comments-value:after {
            border-color: #3c3c3c;
        }

        .skinset-background acronym, .skinset-background abbr {
            border-bottom: 1px dashed #ff9291;
        }

        .skinset-background #content article.hentry.sticky, .skinset-background #content article.hentry.status-sticky {
            border-top-color: #3c3c3c;
        }

        .skinset-background #bbpress-forums div.bbp-template-notice, .skinset-background #bbpress-forums div.indicator-hint {
            border-left-color: #3c3c3c;
        }

        .skinset-background button, .skinset-background input[type="button"], .skinset-background submit, .skinset-background input[type="submit"], .skinset-background a.button, .skinset-background button.button, .skinset-background .button-wrap .button.link_color a, .skinset-background input.button, .skinset-background #review_form #submit, .skinset-background .vc_toggle_title h4:before, .skinset-background a.action-icons i, .skinset-background .commentlist .reply a, .skinset-background .vc_tta-tabs.vc_tta-color-button_color .vc_tta-tab > a, .skinset-background .vc_general.vc_btn3-color-link_color, .skinset-background .dir-nav-icon-two .page-animate-nav, .skinset-background .vc_toggle_color_button_color .vc_toggle_icon, .skinset-background .vc_toggle_simple.vc_toggle_color_button_color .vc_toggle_icon::after, .skinset-background .vc_toggle_simple.vc_toggle_color_button_color .vc_toggle_icon::before, .skinset-background .vc_tta-color-button_color.vc_tta-accordion .vc_tta-panel .vc_tta-panel-heading, .skinset-background .vc_tta-color-button_color.vc_tta-accordion .vc_tta-panel .vc_tta-panel-body, .skinset-background .vc_tta-tabs.vc_tta-color-button_color .vc_tta-panel-heading, .skinset-background .vc_message_box-3d.vc_color-button_color, .skinset-background .vc_message_box-3d.vc_color-button_color, .skinset-background .vc_message_box-solid.vc_color-button_color, .skinset-background .vc_message_box-standard.vc_color-button_color, .skinset-background .vc_message_box-solid-icon.vc_color-button_color .vc_message_box-icon, .skinset-background .woocommerce-message:before, .skinset-background nav li.button_color a, .skinset-background .dock-tab-wrapper .widget_shopping_cart a.button, .skinset-background a.woocommerce-product-gallery__trigger:after {
            background-color: #3c3c3c;
        }

        .skinset-background .vc_general.vc_btn3-style-outline.vc_btn3-color-link_color, .skinset-background .vc_toggle_color_inverted.vc_toggle_color_button_color .vc_toggle_icon, .skinset-background .vc_toggle.vc_toggle_arrow.vc_toggle_color_button_color .vc_toggle_icon::after, .skinset-background .vc_toggle.vc_toggle_arrow.vc_toggle_color_button_color .vc_toggle_icon::before, .skinset-background .vc_tta-color-button_color.vc_tta-accordion.vc_tta-style-outline .vc_tta-panel .vc_tta-panel-heading, .skinset-background .vc_tta-color-button_color.vc_tta-accordion.vc_tta-style-outline .vc_tta-panel .vc_tta-panel-body, .skinset-background .vc_message_box-outline.vc_color-button_color, .skinset-background .vc_message_box-standard.vc_color-button_color, .skinset-background .vc_message_box-solid-icon.vc_color-button_color, .skinset-background .vc_message_box-3d.vc_color-button_color {
            border-color: #3c3c3c;
            color: #3c3c3c;
        }

        .skinset-background .vc_general.vc_btn3-style-outline.vc_btn3-color-link_color:focus, .skinset-background .vc_general.vc_btn3-style-outline.vc_btn3-color-link_color:hover, .skinset-background .vc_tta-color-button_color.vc_tta-accordion.vc_tta-style-outline .vc_tta-panel.vc_active .vc_tta-panel-heading, .skinset-background .vc_tta-color-button_color.vc_tta-accordion.vc_tta-style-outline .vc_tta-panel.vc_active .vc_tta-panel-body {
            border-color: #ff9291;
            color: #ff9291;
        }

        .skinset-background button, .skinset-background input[type="button"], .skinset-background submit, .skinset-background input[type="submit"], .skinset-background a.button, .skinset-background button.button, .skinset-background input.button, .skinset-background #review_form #submit, .skinset-background .commentlist .reply a, .skinset-background .button-wrap .button.link_color a, .skinset-background .vc_tta-tabs.vc_tta-color-button_color .vc_tta-tab > a, .skinset-background .vc_tta-tabs.vc_tta-color-button_color .vc_tta-panel-heading, .skinset-background .vc_general.vc_btn3-color-link_color, .skinset-background .dir-nav-icon-two .page-animate-nav, .skinset-background .vc_message_box-solid-icon.vc_color-button_color .vc_message_box-icon, .skinset-background .vc_message_box-3d.vc_color-button_color, .skinset-background .vc_message_box-solid.vc_color-button_color, .skinset-background .vc_message_box-standard.vc_color-button_color, .skinset-background .woocommerce-message:before, .skinset-background nav li.button_color, .skinset-background nav li.button_color a, .skinset-background .dock-tab-wrapper .widget_shopping_cart a.button, .skinset-background a.action-icons i, .skinset-background a.woocommerce-product-gallery__trigger:after {
            color: #ffffff;
        }

        .skinset-background button:hover, .skinset-background input[type="button"]:hover, .skinset-background submit:hover, .skinset-background input[type="submit"]:hover, .skinset-background a.button:hover, .skinset-background button.button:hover, .skinset-background input.button:hover, .skinset-background #review_form #submit:hover, .skinset-background .button-wrap .button.link_color a:hover, .skinset-background .commentlist .reply a:hover, .skinset-background .vc_tta-tabs.vc_tta-color-button_color .vc_tta-tab > a:hover, .skinset-background .vc_tta-tabs.vc_tta-color-button_color .vc_tta-tab.vc_active > a, .skinset-background .vc_general.vc_btn3-color-link_color:focus, .skinset-background .vc_general.vc_btn3-color-link_color:hover, .skinset-background .dir-nav-icon-two .page-animate-nav:hover, .skinset-background .vc_tta-color-button_color .vc_tta-panels .vc_tta-panel-body, .skinset-background .vc_tta-color-button_color.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-heading, .skinset-background .vc_tta-color-button_color.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-body, .skinset-background .dock-tab-wrapper .widget_shopping_cart a.button:hover, .skinset-background a.action-icons i:hover, .skinset-background nav li.button_color:hover a, .skinset-background .vc_tta-tabs.vc_tta-color-button_color .vc_active .vc_tta-panel-heading, .skinset-background a.woocommerce-product-gallery__trigger:after {
            background-color: #ff9291;
            color: #f7f7f7;
        }

        .skinset-background .vc_message_box-3d.vc_color-button_color, .skinset-background .vc_btn3.vc_btn3-color-link_color.vc_btn3-style-3d {
            box-shadow: 0 5px 0 #1e1e1e;
        }

        .skinset-background .vc_btn3.vc_btn3-color-link_color.vc_btn3-style-3d:hover {
            box-shadow: 0 3px 0 #1e1e1e;
        }

        .skinset-background ul.post-metadata-wrap, .skinset-background ul.post-metadata-wrap a, .skinset-background .entry-title span.date, .skinset-background .post-titles span.date, .skinset-background .comment a.comment-date {
            color: #b5b1b1;
        }

        .skinset-main.acoda-skin {
            background-color: rgb(255, 255, 255);
            background-color: rgba(255, 255, 255, 1);
        }

        .gallery-wrap .slidernav, .headerpanel-widgets input[type=text], .headerpanel-widgets input[type=password], .headerpanel-widgets input[type=file], .headerpanel-widgets input[type=tel], .headerpanel-widgets input[type=url], .headerpanel-widgets input[type=email], .headerpanel-widgets input[type="date"], .headerpanel-widgets input[type="datetime"], .headerpanel-widgets input[type="datetime-local"], .headerpanel-widgets input[type="month"], .headerpanel-widgets input[type="week"], .headerpanel-widgets input[type="number"], .headerpanel-widgets input[type="search"], .headerpanel-widgets input[type="tel"], .headerpanel-widgets input[type="time"], .headerpanel-widgets pre, .headerpanel-widgets code, .headerpanel-widgets xmp, .headerpanel-widgets textarea, .headerpanel-widgets select, .skinset-main input[type=text], .skinset-main input[type=password], .skinset-main input[type=file], .skinset-main input[type=tel], .skinset-main input[type=url], .skinset-main input[type=email], .skinset-main input[type="date"], .skinset-main input[type="datetime"], .skinset-main input[type="datetime-local"], .skinset-main input[type="month"], .skinset-main input[type="week"], .skinset-main input[type="number"], .skinset-main input[type="search"], .skinset-main input[type="tel"], .skinset-main input[type="time"], .skinset-main pre, .skinset-main code, .skinset-main xmp, .skinset-main textarea, .skinset-main select, .skinset-main table thead tr, .skinset-main table tr:nth-child(even), .skinset-main fieldset legend, .skinset-main input.input-text, .skinset-main .author-info, .skinset-main .frame .gridimg-wrap .img, .skinset-main .wpb_video_widget.frame, .skinset-main .row.custom-row-inherit, .skinset-main .splitter ul li.active, .skinset-main nav.pagination .page-numbers, .skinset-main .woocommerce-pagination ul .page-numbers, .skinset-main .wpb_call_to_action, .skinset-main .vc_progress_bar .vc_single_bar, .skinset-main .zoomflow .controlsCon > .arrow-left, .skinset-main .zoomflow .controlsCon > .arrow-right, .skinset-main .autototop a, .skinset-main .commentlist .comment-content, .skinset-main div.wp-caption, .skinset-main .gallery-caption, .skinset-main #related_posts .related_post_wrap, .skinset-main .socialicons ul li a, .skinset-main span.tooltip, .skinset-main #content.boxed article.hentry, .skinset-main span.highlight.three, .skinset-main .vc_cta3.vc_cta3-color-skin_element.vc_cta3-style-classic, .skinset-main .vc_cta3.vc_cta3-color-skin_element.vc_cta3-style-flat, .skinset-main .vc_icon_element-background.vc_icon_element-background-color-skin_element, .skinset-main .wpb_single_image .vc_single_image-wrapper.vc_box_border, .skinset-main .wpb_single_image .vc_single_image-wrapper.vc_box_border_circle, .skinset-main .vc_tta-tabs.vc_tta-color-shaded_color .vc_tta-tab > a, .skinset-main .vc_tta-tabs.vc_tta-color-shaded_color .vc_tta-panel-heading, .skinset-main .vc_tta-color-shaded_color.vc_tta-accordion.vc_tta-style-flat.vc_tta-tabs .vc_tta-panels, .skinset-main .vc_tta-color-shaded_color.vc_tta-accordion .vc_tta-panel .vc_tta-panel-heading, .skinset-main .vc_tta-color-shaded_color.vc_tta-accordion .vc_tta-panel .vc_tta-panel-body, .skinset-main .vc_message_box-3d.vc_color-shaded_color, .skinset-main .vc_message_box-3d.vc_color-shaded_color, .skinset-main .vc_message_box-solid.vc_color-shaded_color, .skinset-main .vc_message_box-standard.vc_color-shaded_color, .skinset-main .vc_message_box-solid-icon.vc_color-shaded_color .vc_message_box-icon, .skinset-main .screen-reader-text:focus {
            background-color: #fcfcfc;
        }

        .skinset-main #payment div.payment_box:after, .skinset-main .woocommerce-tabs ul.tabs li.active:after, .skinset-main #reviews #comments ol.commentlist li .comment-text:after, .skinset-main .commentlist .comment-content:before, .skinset-main .author-info:before, .skinset-main .single_variation_wrap .single_variation:after {
            border-color: #fcfcfc;
        }

        .skinset-main input[type=text], .skinset-main input[type=password], .skinset-main input[type=file], .skinset-main input[type=tel], .skinset-main input[type=url], .skinset-main input[type=email], .skinset-main input[type="date"], .skinset-main input[type="datetime"], .skinset-main input[type="datetime-local"], .skinset-main input[type="month"], .skinset-main input[type="week"], .skinset-main input[type="number"], .skinset-main input[type="search"], .skinset-main input[type="tel"], .skinset-main input[type="time"], .skinset-main pre, .skinset-main code, .skinset-main xmp, .skinset-main textarea, .skinset-main select, .gallery-wrap .slidernav, .headerpanel-widgets input[type=text], .headerpanel-widgets input[type=password], .headerpanel-widgets input[type=file], .headerpanel-widgets input[type=tel], .headerpanel-widgets input[type=url], .headerpanel-widgets input[type=email], .headerpanel-widgets input[type="date"], .headerpanel-widgets input[type="datetime"], .headerpanel-widgets input[type="datetime-local"], .headerpanel-widgets input[type="month"], .headerpanel-widgets input[type="week"], .headerpanel-widgets input[type="number"], .headerpanel-widgets input[type="search"], .headerpanel-widgets input[type="tel"], .headerpanel-widgets input[type="time"], .headerpanel-widgets pre, .headerpanel-widgets code, .headerpanel-widgets xmp, .headerpanel-widgets textarea, .headerpanel-widgets select, .select2-drop, .select2-search .select2-input, .skinset-main .dock-tab-wrapper .pointer, .skinset-main .sub-header, .skinset-main legend, .skinset-main input.input-text, .skinset-main #content article.hentry, .skinset-main .frame .gridimg-wrap .img, .skinset-main .wpb_video_widget.frame, .skinset-main .wpb_call_to_action, .skinset-main img.avatar, .skinset-main .tagcloud a, .skinset-main .vc_sep_color_skin_element .vc_sep_line, .skinset-main hr, .skinset-main #lang_sel_list li, .skinset-main .commentlist .children li.comment, .skinset-main .commentlist > li.comment, .skinset-main .autototop a, .skinset-main .row.custom-row-inherit, .skinset-main .splitter ul li.active, .skinset-main .vc_progress_bar .vc_single_bar, .skinset-main .twitter-wrap, .skinset-main table tr, .skinset-main .author-info, .skinset-main .author-info:after, .skinset-main .commentlist .comment-content, .skinset-main .commentlist .comment-content:after, .skinset-main div.wp-caption, .skinset-main .gallery-caption, .skinset-main ul.post-metadata-wrap, .skinset-main #related_posts .related_post_wrap, .skinset-main .socialicons ul li a, .skinset-main span.tooltip, .skinset-main nav.pagination .page-numbers, .skinset-main .woocommerce-pagination ul .page-numbers, .skinset-main span.highlight.three, .skinset-main .vc_cta3.vc_cta3-color-skin_element.vc_cta3-style-classic, .skinset-main .vc_cta3.vc_cta3-color-skin_element.vc_cta3-style-outline, .skinset-main .wpb_single_image .vc_single_image-wrapper.vc_box_border, .skinset-main .wpb_single_image .vc_single_image-wrapper.vc_box_border_circle, .skinset-main .vc_tta-tabs.vc_tta-color-shaded_color.vc_tta-style-outline .vc_tta-tab > a, .skinset-main .vc_tta.vc_general.vc_tta-color-shaded_color.vc_tta-style-outline .vc_tta-panels, .skinset-main .vc_tta.vc_tta-style-outline.vc_tta-color-shaded_color .vc_tta-panel-body::after, .skinset-main .vc_tta.vc_tta-style-outline.vc_tta-color-shaded_color .vc_tta-panel-body::before, .skinset-main .vc_tta-tabs.vc_tta-color-shaded_color .vc_tta-panel-heading, .skinset-main .vc_tta-color-shaded_color.vc_tta-style-classic.vc_tta-accordion .vc_tta-panel .vc_tta-panel-body, .skinset-main .vc_tta-color-shaded_color.vc_tta-style-classic.vc_tta-accordion .vc_tta-panel .vc_tta-panel-heading, .skinset-main .vc_tta-color-shaded_color.vc_tta-style-outline.vc_tta-accordion .vc_tta-panel .vc_tta-panel-body, .skinset-main .vc_tta-color-shaded_color.vc_tta-style-outline.vc_tta-accordion .vc_tta-panel .vc_tta-panel-heading, .skinset-main .vc_message_box-outline.vc_color-shaded_color, .skinset-main .vc_message_box-standard.vc_color-shaded_color, .skinset-main .vc_message_box-solid-icon.vc_color-shaded_color, .skinset-main .vc_message_box-3d.vc_color-shaded_color, .skinset-main .wpb_wrapper .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-outline.vc_icon_element-background-color-skin_element {
            border-color: #ededed;
        }

        .skinset-main input[type=text], .skinset-main input[type=password], .skinset-main input[type=file], .skinset-main input[type=tel], .skinset-main input[type=url], .skinset-main input[type=email], .skinset-main input[type="date"], .skinset-main input[type="datetime"], .skinset-main input[type="datetime-local"], .skinset-main input[type="month"], .skinset-main input[type="week"], .skinset-main input[type="number"], .skinset-main input[type="search"], .skinset-main input[type="tel"], .skinset-main input[type="time"], .skinset-main pre, .skinset-main code, .skinset-main xmp, .skinset-main textarea, .skinset-main select, .gallery-wrap .slidernav, .headerpanel-widgets input[type=text], .headerpanel-widgets input[type=password], .headerpanel-widgets input[type=file], .headerpanel-widgets input[type=tel], .headerpanel-widgets input[type=url], .headerpanel-widgets input[type=email], .headerpanel-widgets input[type="date"], .headerpanel-widgets input[type="datetime"], .headerpanel-widgets input[type="datetime-local"], .headerpanel-widgets input[type="month"], .headerpanel-widgets input[type="week"], .headerpanel-widgets input[type="number"], .headerpanel-widgets input[type="search"], .headerpanel-widgets input[type="tel"], .headerpanel-widgets input[type="time"], .headerpanel-widgets pre, .headerpanel-widgets code, .headerpanel-widgets xmp, .headerpanel-widgets textarea, .headerpanel-widgets select, .skinset-main table thead tr, .skinset-main table tr:nth-child(even), .skinset-main #searchsubmit, .skinset-main .author-info, .skinset-main .splitter ul li.active, .skinset-main .bbp-pagination-links a, .skinset-main .bbp-pagination-links span.current, .skinset-main .wpb_call_to_action, .skinset-main .acoda-pricing-signup, .skinset-main .panelcontent.heading, .skinset-main div.item-list-tabs, .skinset-main .tab-wrap .trigger, .skinset-main .wrapper .intro-text, .skinset-main .vc_progress_bar .vc_single_bar, .skinset-main .zoomflow .controlsCon > .arrow-left, .skinset-main .zoomflow .controlsCon > .arrow-right, .skinset-main .autototop a, .skinset-main .gallery-wrap .slidernav a, .skinset-main #reviews #comments ol.commentlist li .comment-text, .skinset-main table.shop_table thead th, .skinset-main .commentlist .comment-content, .skinset-main .row.custom-row-inherit, .skinset-main div.wp-caption, .skinset-main .gallery-caption, .skinset-main .socialicons ul li, .skinset-main span.tooltip, .skinset-main #content.boxed article.hentry, .skinset-main #bbpress-forums .hentry, .skinset-main #bbpress-forums .bbp-header, .skinset-main div.bbp-template-notice, .skinset-main div.indicator-hint, .skinset-main nav.anchorlink-nav ul, .skinset-main span.highlight.three, .skinset-main .vc_cta3.vc_cta3-color-skin_element.vc_cta3-style-classic, .skinset-main .vc_cta3.vc_cta3-color-skin_element.vc_cta3-style-flat, .skinset-main .vc_tta-panels.vc_tta-color-button_color .vc_tta-panel-body, .skinset-main .vc_tta-tabs.vc_tta-color-shaded_color .vc_tta-tab > a, .skinset-main .vc_tta-color-shaded_color.vc_tta-accordion .vc_tta-panel .vc_tta-panel-heading, .skinset-main .vc_tta-color-shaded_color.vc_tta-accordion .vc_tta-panel .vc_tta-panel-body, .skinset-main .vc_message_box-solid-icon.vc_color-shaded_color .vc_message_box-icon, .skinset-main .vc_message_box-3d.vc_color-shaded_color, .skinset-main .vc_message_box-solid.vc_color-shaded_color, .skinset-main .vc_message_box-standard.vc_color-shaded_color, .skinset-main .screen-reader-text:focus, .skinset-main .vc_tta-tabs.vc_tta-color-shaded_color .vc_tta-panel-heading {
            color: #3f3f3f;
        }

        .skinset-main .vc_message_box-3d.vc_color-shaded_color {
            box-shadow: 0 5px 0 #dedede;
        }

        .skinset-main #content.boxed input[type=text], .skinset-main #content.boxed input[type=password], .skinset-main #content.boxed input[type=file], .skinset-main #content.boxed input[type=tel], .skinset-main #content.boxed input[type=url], .skinset-main #content.boxed input[type=email], .skinset-main #content.boxed input[type="date"], .skinset-main #content.boxed input[type="datetime"], .skinset-main #content.boxed input[type="datetime-local"], .skinset-main #content.boxed input[type="month"], .skinset-main #content.boxed input[type="week"], .skinset-main #content.boxed input[type="number"], .skinset-main #content.boxed input[type="search"], .skinset-main #content.boxed input[type="tel"], .skinset-main #content.boxed input[type="time"], .skinset-main #content.boxed article pre, .skinset-main #content.boxed article code, .skinset-main #content.boxed article xmp, .skinset-main #content.boxed article textarea, .skinset-main #content.boxed article select, .skinset-main #content.boxed article table thead tr, .skinset-main #content.boxed article table tr:nth-child(even), .skinset-main #content.boxed article div.wp-caption, .skinset-main #content.boxed article .gallery-caption, .skinset-main #content.boxed article nav.pagination .page-numbers {
            background-color: rgb(255, 255, 255);
            background-color: rgba(255, 255, 255, 1);
        }

        .skinset-header.acoda-skin {
            color: #545454;
        }

        .skinset-header div.item-list-tabs ul li a, .skinset-header .widget ul li.current_page_item a, .skinset-header div.post-metadata a, .skinset-header .commentlist .comment-author a, .skinset-header .recent-metadata a, .skinset-header .post-metadata a, .skinset-header .widget.widget_pages li a, .skinset-header .widget.widget_nav_menu li a, .skinset-header .widget.widget_recent_entries li a, .skinset-header #content span.price, .skinset-header #content span.amount, .skinset-header ul.products li.product h3 {
            color: #545454;
        }

        .skinset-header .blockquote_line, .skinset-header blockquote, .skinset-header .button.vc_btn_outlined:hover, .skinset-header .button.vc_btn_square_outlined:hover, .skinset-header .vc_sep_color_link_color .vc_sep_line {
            border-color: #545454 !important;
        }

        .skinset-header a, .skinset-header #sub-tabs i, .skinset-header .current_page_item > a, .skinset-header .current-menu-item > a, .skinset-header .current-menu-ancestor > a, .skinset-header #content .cart-collaterals .cart_totals .total, .skinset-header #content .cart-collaterals .cart_totals .cart-subtotal, .skinset-header #content .cart-collaterals .cart_totals span.amount, .skinset-header #content div.product .stock, .skinset-header span.text_linkcolor, .skinset-header span.white-text a:hover, .skinset-header .commentlist .comment-author h6, .skinset-header .commentlist .comment-author h6 a, .skinset-header .list.link_color li:before {
            color: #545454;
        }

        .skinset-header li:hover > a, .skinset-header li.current_page_item > a, .skinset-header li.current_page_parent > a, .skinset-header li.current-post-parent > a, .skinset-header li.current-menu-item > a, .skinset-header #acoda_dropmenu > li.menu-item:hover > a, .skinset-header li.current-menu-ancestor > a, .skinset-header a:hover, .skinset-header a:active, .skinset-header a.waypoint_active, .skinset-header .post-metadata a:hover, .skinset-header nav.pagination .page-numbers.current, .skinset-header ul.post-metadata-wrap a:hover, .skinset-header .widget.widget_pages li a:hover, .skinset-header .widget.widget_nav_menu li a:hover, .skinset-header .widget.widget_recent_entries li a:hover, .skinset-header .widget.widget_pages a, .skinset-header .gallery-wrap .slidernav-left:hover a, .skinset-header .gallery-wrap .slidernav-right:hover a, .skinset-header .zoomflow .controlsCon > .arrow-left:hover i, .skinset-header .zoomflow .controlsCon > .arrow-right:hover i, .skinset-header .control-panel li a:hover, .skinset-header .info .info-back a:hover, .skinset-header .post-like a.liked i, .skinset-header span.text_linkhovercolor, .skinset-header span.text_linkhovercolor a, .skinset-header nav.pagination > .page-numbers, .skinset-header .acoda-ajax-loading:after, .skinset-header .wpb_content_element .wpb_wrapper .ui-state-active a, .skinset-header .gallery-wrap .ih-item .info a:hover, .skinset-header .vc_btn3.vc_btn3-style-outline.text_only:hover, .skinset-header .page-numbers.current {
            color: #ff918f;
        }

        .skinset-header h1, .skinset-header h1 a {
            color: #303030;
        }

        .skinset-header #acoda-tabs, .skinset-header #acoda-tabs ul, .splitter-wrap li a, nav.dock-panel-wrap ul.dock_menu li {
            font-style: normal;
            font-family: Montserrat;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: -0.05em;
        }

        .skinset-header #acoda-tabs .menu-item > a > i {
            min-width: 4rem;
        }

        @media only screen and (min-width: 64.063em) {
            .skinset-header #acoda-tabs, .skinset-header #acoda-tabs ul, .skinset-header #acoda-tabs ul.dock-panel li.dock-tab a i, nav.dock-panel-wrap ul.dock_menu li {
                font-size: 4rem;
            }
        }

        .skinset-header span.highlight.one, .skinset-header .commentlist .reply a, .skinset-header div.header-infobar, .skinset-header div.item-list-tabs ul li a span, .skinset-header .widget_display_stats dd strong, .skinset-header div#message.updated, .skinset-header input[type="button"], .skinset-header button, .skinset-header submit, .skinset-header input[type="submit"], .skinset-header a.button, .skinset-header .button-wrap .button.link_color a, .skinset-header button.button, .skinset-header input.button, .skinset-header #review_form #submit, .skinset-header .woocommerce-info:before, .skinset-header span.onsale, .skinset-header .vc_general.vc_btn3-color-link_color, .skinset-header span.fonticon.background, .skinset-header a.action-icons i, .skinset-header .color .socicons.social-email a, .skinset-header .color_hover .socicons.social-email a:hover, .skinset-header .vc_toggle_title h4:before, .skinset-header span.portfolio-link, .skinset-header span.action-hover {
            background-color: #545454;
        }

        .skinset-header input[type="submit"]:hover, .skinset-header input[type="button"]:hover, .skinset-header a.button:hover, .skinset-header span.highlight, .skinset-header button.button:hover, .skinset-header .vc_general.vc_btn3-color-link_color:focus, .skinset-header .vc_general.vc_btn3-color-link_color:hover, .skinset-header .post.sticky .entry > h2:before, .skinset-header .status-sticky .entry > h2:before, .skinset-header .comments-value, .skinset-header .acoda-spinner .dot1, .skinset-header .acoda-spinner .dot2, .skinset-header .acoda-spinner .dot3 {
            background-color: #ff918f;
        }

        .skinset-header ::selection {
            background-color: #ff918f;
        }

        .skinset-header ::-moz-selection {
            background-color: #ff918f;
        }

        .skinset-header .comments-value:after {
            border-color: #ff918f;
        }

        .skinset-header acronym, .skinset-header abbr {
            border-bottom: 1px dashed #545454;
        }

        .skinset-header #content article.hentry.sticky, .skinset-header #content article.hentry.status-sticky {
            border-top-color: #ff918f;
        }

        .skinset-header #bbpress-forums div.bbp-template-notice, .skinset-header #bbpress-forums div.indicator-hint {
            border-left-color: #ff918f;
        }

        .skinset-sub_header .blockquote_line, .skinset-sub_header blockquote, .skinset-sub_header .button.vc_btn_outlined:hover, .skinset-sub_header .button.vc_btn_square_outlined:hover, .skinset-sub_header .vc_sep_color_link_color .vc_sep_line {
            border-color: #3f3f3f !important;
        }

        .skinset-sub_header a, .skinset-sub_header #sub-tabs i, .skinset-sub_header .current_page_item > a, .skinset-sub_header .current-menu-item > a, .skinset-sub_header .current-menu-ancestor > a, .skinset-sub_header #content .cart-collaterals .cart_totals .total, .skinset-sub_header #content .cart-collaterals .cart_totals .cart-subtotal, .skinset-sub_header #content .cart-collaterals .cart_totals span.amount, .skinset-sub_header #content div.product .stock, .skinset-sub_header span.text_linkcolor, .skinset-sub_header span.white-text a:hover, .skinset-sub_header .commentlist .comment-author h6, .skinset-sub_header .commentlist .comment-author h6 a, .skinset-sub_header .list.link_color li:before {
            color: #3f3f3f;
        }

        .skinset-sub_header span.highlight.one, .skinset-sub_header .commentlist .reply a, .skinset-sub_header div.header-infobar, .skinset-sub_header div.item-list-tabs ul li a span, .skinset-sub_header .widget_display_stats dd strong, .skinset-sub_header div#message.updated, .skinset-sub_header input[type="button"], .skinset-sub_header button, .skinset-sub_header submit, .skinset-sub_header input[type="submit"], .skinset-sub_header a.button, .skinset-sub_header .button-wrap .button.link_color a, .skinset-sub_header button.button, .skinset-sub_header input.button, .skinset-sub_header #review_form #submit, .skinset-sub_header .woocommerce-info:before, .skinset-sub_header span.onsale, .skinset-sub_header .vc_general.vc_btn3-color-link_color, .skinset-sub_header span.fonticon.background, .skinset-sub_header a.action-icons i, .skinset-sub_header .color .socicons.social-email a, .skinset-sub_header .color_hover .socicons.social-email a:hover, .skinset-sub_header .vc_toggle_title h4:before, .skinset-sub_header span.portfolio-link, .skinset-sub_header span.action-hover {
            background-color: #3f3f3f;
        }

        .skinset-sub_header acronym, .skinset-sub_header abbr {
            border-bottom: 1px dashed #3f3f3f;
        }

        .skinset-dockbar.acoda-skin {
            color: #0a0a0a;
        }

        .skinset-dockbar div.item-list-tabs ul li a, .skinset-dockbar .widget ul li.current_page_item a, .skinset-dockbar div.post-metadata a, .skinset-dockbar .commentlist .comment-author a, .skinset-dockbar .recent-metadata a, .skinset-dockbar .post-metadata a, .skinset-dockbar .widget.widget_pages li a, .skinset-dockbar .widget.widget_nav_menu li a, .skinset-dockbar .widget.widget_recent_entries li a, .skinset-dockbar #content span.price, .skinset-dockbar #content span.amount, .skinset-dockbar ul.products li.product h3 {
            color: #0a0a0a;
        }

        .skinset-dockbar .dock-panel > li.dock-tab a, .skinset-dockbar table thead tr, .skinset-dockbar table tr:nth-child(even), .skinset-dockbar #searchsubmit, .skinset-dockbar .author-info, .skinset-dockbar .splitter ul li.active, .skinset-dockbar .bbp-pagination-links a, .skinset-dockbar .bbp-pagination-links span.current, .skinset-dockbar .wpb_call_to_action, .skinset-dockbar .acoda-pricing-signup, .skinset-dockbar .panelcontent.heading, .skinset-dockbar div.item-list-tabs, .skinset-dockbar .tab-wrap .trigger, .skinset-dockbar .wrapper .intro-text, .skinset-dockbar .vc_progress_bar .vc_single_bar, .skinset-dockbar .zoomflow .controlsCon > .arrow-left, .skinset-dockbar .zoomflow .controlsCon > .arrow-right, .skinset-dockbar .autototop a, .skinset-dockbar .gallery-wrap .slidernav a, .skinset-dockbar #reviews #comments ol.commentlist li .comment-text, .skinset-dockbar table.shop_table thead th, .skinset-dockbar .commentlist .comment-content, .skinset-dockbar .row.custom-row-inherit, .skinset-dockbar div.wp-caption, .skinset-dockbar .gallery-caption, .skinset-dockbar .socialicons ul li, .skinset-dockbar span.tooltip, .skinset-dockbar #content.boxed article.hentry, .skinset-dockbar #bbpress-forums .hentry, .skinset-dockbar #bbpress-forums .bbp-header, .skinset-dockbar div.bbp-template-notice, .skinset-dockbar div.indicator-hint, .skinset-dockbar nav.anchorlink-nav ul, .skinset-dockbar span.highlight.three, .skinset-dockbar .vc_cta3.vc_cta3-color-skin_element.vc_cta3-style-classic, .skinset-dockbar .vc_cta3.vc_cta3-color-skin_element.vc_cta3-style-flat, .skinset-dockbar .vc_tta-panels.vc_tta-color-button_color .vc_tta-panel-body, .skinset-dockbar .vc_tta-tabs.vc_tta-color-shaded_color .vc_tta-tab > a, .skinset-dockbar .vc_tta-color-shaded_color.vc_tta-accordion .vc_tta-panel .vc_tta-panel-heading, .skinset-dockbar .vc_tta-color-shaded_color.vc_tta-accordion .vc_tta-panel .vc_tta-panel-body, .skinset-dockbar .vc_message_box-solid-icon.vc_color-shaded_color .vc_message_box-icon, .skinset-dockbar .vc_message_box-3d.vc_color-shaded_color, .skinset-dockbar .vc_message_box-solid.vc_color-shaded_color, .skinset-dockbar .vc_message_box-standard.vc_color-shaded_color, .skinset-dockbar .screen-reader-text:focus, .skinset-dockbar .vc_tta-tabs.vc_tta-color-shaded_color .vc_tta-panel-heading {
            color: #0a0404;
        }

        .skinset-dockpanel.acoda-skin {
            color: #2b2b2b;
            background-color: rgb(255, 255, 255);
            background-color: rgba(255, 255, 255, 1);
        }

        .skinset-dockpanel {
            background: rgba(255, 255, 255, 1);
        }

        .dock-panel-wrap .dock-tab-wrapper span.pointer:before {
            border-color: rgba(255, 255, 255, 1);
        }

        @media only screen and (min-width: 64.063em) {
            .dock_layout_2 .dock-panel-wrap .dock-tab-wrapper span.pointer:before, .dock_layout_3 .dock-panel-wrap .dock-tab-wrapper span.pointer:before {
                border-color: rgba(255, 255, 255, 1);
            }
        }

        .skinset-dockpanel div.item-list-tabs ul li a, .skinset-dockpanel .widget ul li.current_page_item a, .skinset-dockpanel div.post-metadata a, .skinset-dockpanel .commentlist .comment-author a, .skinset-dockpanel .recent-metadata a, .skinset-dockpanel .post-metadata a, .skinset-dockpanel .widget.widget_pages li a, .skinset-dockpanel .widget.widget_nav_menu li a, .skinset-dockpanel .widget.widget_recent_entries li a, .skinset-dockpanel #content span.price, .skinset-dockpanel #content span.amount, .skinset-dockpanel ul.products li.product h3 {
            color: #2b2b2b;
        }

        .skinset-dockpanel .blockquote_line, .skinset-dockpanel blockquote, .skinset-dockpanel .button.vc_btn_outlined:hover, .skinset-dockpanel .button.vc_btn_square_outlined:hover, .skinset-dockpanel .vc_sep_color_link_color .vc_sep_line {
            border-color: #2b2b2b !important;
        }

        .skinset-dockpanel a, .skinset-dockpanel #sub-tabs i, .skinset-dockpanel .current_page_item > a, .skinset-dockpanel .current-menu-item > a, .skinset-dockpanel .current-menu-ancestor > a, .skinset-dockpanel #content .cart-collaterals .cart_totals .total, .skinset-dockpanel #content .cart-collaterals .cart_totals .cart-subtotal, .skinset-dockpanel #content .cart-collaterals .cart_totals span.amount, .skinset-dockpanel #content div.product .stock, .skinset-dockpanel span.text_linkcolor, .skinset-dockpanel span.white-text a:hover, .skinset-dockpanel .commentlist .comment-author h6, .skinset-dockpanel .commentlist .comment-author h6 a, .skinset-dockpanel .list.link_color li:before {
            color: #2b2b2b;
        }

        #header .skinset-dockpanel a:hover, #header .skinset-dockpanel a:active, .skinset-dockpanel a:hover, .skinset-dockpanel a:active, .skinset-dockpanel a.waypoint_active, .skinset-dockpanel .post-metadata a:hover, .skinset-dockpanel nav.pagination .page-numbers.current, .skinset-dockpanel ul.post-metadata-wrap a:hover, .skinset-dockpanel .widget.widget_pages li a:hover, .skinset-dockpanel .widget.widget_nav_menu li a:hover, .skinset-dockpanel .widget.widget_recent_entries li a:hover, .skinset-dockpanel .widget.widget_pages a, .skinset-dockpanel .gallery-wrap .slidernav-left:hover a, .skinset-dockpanel .gallery-wrap .slidernav-right:hover a, .skinset-dockpanel .zoomflow .controlsCon > .arrow-left:hover i, .skinset-dockpanel .zoomflow .controlsCon > .arrow-right:hover i, .skinset-dockpanel .control-panel li a:hover, .skinset-dockpanel .info .info-back a:hover, .skinset-dockpanel .post-like a.liked i, .skinset-dockpanel span.text_linkhovercolor, .skinset-dockpanel span.text_linkhovercolor a, .skinset-dockpanel nav.pagination > .page-numbers, .skinset-dockpanel .acoda-ajax-loading:after, .skinset-dockpanel .wpb_content_element .wpb_wrapper .ui-state-active a, .skinset-dockpanel .gallery-wrap .ih-item .info a:hover, .skinset-dockpanel .vc_btn3.vc_btn3-style-outline.text_only:hover, .skinset-dockpanel .page-numbers.current {
            color: #ff918f;
        }

        .skinset-dockpanel span.highlight.one, .skinset-dockpanel .commentlist .reply a, .skinset-dockpanel div.header-infobar, .skinset-dockpanel div.item-list-tabs ul li a span, .skinset-dockpanel .widget_display_stats dd strong, .skinset-dockpanel div#message.updated, .skinset-dockpanel input[type="button"], .skinset-dockpanel button, .skinset-dockpanel submit, .skinset-dockpanel input[type="submit"], .skinset-dockpanel a.button, .skinset-dockpanel .button-wrap .button.link_color a, .skinset-dockpanel button.button, .skinset-dockpanel input.button, .skinset-dockpanel #review_form #submit, .skinset-dockpanel .woocommerce-info:before, .skinset-dockpanel span.onsale, .skinset-dockpanel .vc_general.vc_btn3-color-link_color, .skinset-dockpanel span.fonticon.background, .skinset-dockpanel a.action-icons i, .skinset-dockpanel .color .socicons.social-email a, .skinset-dockpanel .color_hover .socicons.social-email a:hover, .skinset-dockpanel .vc_toggle_title h4:before, .skinset-dockpanel span.portfolio-link, .skinset-dockpanel span.action-hover {
            background-color: #2b2b2b;
        }

        .skinset-dockpanel input[type="submit"]:hover, .skinset-dockpanel input[type="button"]:hover, .skinset-dockpanel a.button:hover, .skinset-dockpanel span.highlight, .skinset-dockpanel button.button:hover, .skinset-dockpanel .vc_general.vc_btn3-color-link_color:focus, .skinset-dockpanel .vc_general.vc_btn3-color-link_color:hover, .skinset-dockpanel .post.sticky .entry > h2:before, .skinset-dockpanel .status-sticky .entry > h2:before, .skinset-dockpanel .comments-value, .skinset-dockpanel .acoda-spinner .dot1, .skinset-dockpanel .acoda-spinner .dot2, .skinset-dockpanel .acoda-spinner .dot3 {
            background-color: #ff918f;
        }

        .skinset-dockpanel ::selection {
            background-color: #ff918f;
        }

        .skinset-dockpanel ::-moz-selection {
            background-color: #ff918f;
        }

        .skinset-dockpanel .comments-value:after {
            border-color: #ff918f;
        }

        .skinset-dockpanel acronym, .skinset-dockpanel abbr {
            border-bottom: 1px dashed #2b2b2b;
        }

        .skinset-dockpanel #content article.hentry.sticky, .skinset-dockpanel #content article.hentry.status-sticky {
            border-top-color: #ff918f;
        }

        .skinset-dockpanel #bbpress-forums div.bbp-template-notice, .skinset-dockpanel #bbpress-forums div.indicator-hint {
            border-left-color: #ff918f;
        }

        .skinset-dockpanel input[type=text], .skinset-dockpanel input[type=password], .skinset-dockpanel input[type=file], .skinset-dockpanel input[type=tel], .skinset-dockpanel input[type=url], .skinset-dockpanel input[type=email], .skinset-dockpanel input[type="date"], .skinset-dockpanel input[type="datetime"], .skinset-dockpanel input[type="datetime-local"], .skinset-dockpanel input[type="month"], .skinset-dockpanel input[type="week"], .skinset-dockpanel input[type="number"], .skinset-dockpanel input[type="search"], .skinset-dockpanel input[type="tel"], .skinset-dockpanel input[type="time"], .skinset-dockpanel pre, .skinset-dockpanel code, .skinset-dockpanel xmp, .skinset-dockpanel textarea, .skinset-dockpanel select, .skinset-dockpanel table thead tr, .skinset-dockpanel table tr:nth-child(even), .skinset-dockpanel fieldset legend, .skinset-dockpanel input.input-text, .skinset-dockpanel .author-info, .skinset-dockpanel .frame .gridimg-wrap .img, .skinset-dockpanel .wpb_video_widget.frame, .skinset-dockpanel .row.custom-row-inherit, .skinset-dockpanel .splitter ul li.active, .skinset-dockpanel nav.pagination .page-numbers, .skinset-dockpanel .woocommerce-pagination ul .page-numbers, .skinset-dockpanel .wpb_call_to_action, .skinset-dockpanel .vc_progress_bar .vc_single_bar, .skinset-dockpanel .zoomflow .controlsCon > .arrow-left, .skinset-dockpanel .zoomflow .controlsCon > .arrow-right, .skinset-dockpanel .autototop a, .skinset-dockpanel .commentlist .comment-content, .skinset-dockpanel div.wp-caption, .skinset-dockpanel .gallery-caption, .skinset-dockpanel #related_posts .related_post_wrap, .skinset-dockpanel .socialicons ul li a, .skinset-dockpanel span.tooltip, .skinset-dockpanel #content.boxed article.hentry, .skinset-dockpanel span.highlight.three, .skinset-dockpanel .vc_cta3.vc_cta3-color-skin_element.vc_cta3-style-classic, .skinset-dockpanel .vc_cta3.vc_cta3-color-skin_element.vc_cta3-style-flat, .skinset-dockpanel .vc_icon_element-background.vc_icon_element-background-color-skin_element, .skinset-dockpanel .wpb_single_image .vc_single_image-wrapper.vc_box_border, .skinset-dockpanel .wpb_single_image .vc_single_image-wrapper.vc_box_border_circle, .skinset-dockpanel .vc_tta-tabs.vc_tta-color-shaded_color .vc_tta-tab > a, .skinset-dockpanel .vc_tta-tabs.vc_tta-color-shaded_color .vc_tta-panel-heading, .skinset-dockpanel .vc_tta-color-shaded_color.vc_tta-accordion.vc_tta-style-flat.vc_tta-tabs .vc_tta-panels, .skinset-dockpanel .vc_tta-color-shaded_color.vc_tta-accordion .vc_tta-panel .vc_tta-panel-heading, .skinset-dockpanel .vc_tta-color-shaded_color.vc_tta-accordion .vc_tta-panel .vc_tta-panel-body, .skinset-dockpanel .vc_message_box-3d.vc_color-shaded_color, .skinset-dockpanel .vc_message_box-3d.vc_color-shaded_color, .skinset-dockpanel .vc_message_box-solid.vc_color-shaded_color, .skinset-dockpanel .vc_message_box-standard.vc_color-shaded_color, .skinset-dockpanel .vc_message_box-solid-icon.vc_color-shaded_color .vc_message_box-icon, .skinset-dockpanel .screen-reader-text:focus {
            background-color: #fcfcfc;
        }

        .skinset-dockpanel #payment div.payment_box:after, .skinset-dockpanel .woocommerce-tabs ul.tabs li.active:after, .skinset-dockpanel #reviews #comments ol.commentlist li .comment-text:after, .skinset-dockpanel .commentlist .comment-content:before, .skinset-dockpanel .author-info:before, .skinset-dockpanel .single_variation_wrap .single_variation:after {
            border-color: #fcfcfc;
        }

        .skinset-dockpanel input[type=text], .skinset-dockpanel input[type=password], .skinset-dockpanel input[type=file], .skinset-dockpanel input[type=tel], .skinset-dockpanel input[type=url], .skinset-dockpanel input[type=email], .skinset-dockpanel input[type="date"], .skinset-dockpanel input[type="datetime"], .skinset-dockpanel input[type="datetime-local"], .skinset-dockpanel input[type="month"], .skinset-dockpanel input[type="week"], .skinset-dockpanel input[type="number"], .skinset-dockpanel input[type="search"], .skinset-dockpanel input[type="tel"], .skinset-dockpanel input[type="time"], .skinset-dockpanel pre, .skinset-dockpanel code, .skinset-dockpanel xmp, .skinset-dockpanel textarea, .skinset-dockpanel select, .skinset-dockpanel .dock-tab-wrapper .pointer, .skinset-dockpanel .sub-header, .skinset-dockpanel legend, .skinset-dockpanel input.input-text, .skinset-dockpanel #content article.hentry, .skinset-dockpanel .frame .gridimg-wrap .img, .skinset-dockpanel .wpb_video_widget.frame, .skinset-dockpanel .wpb_call_to_action, .skinset-dockpanel img.avatar, .skinset-dockpanel .tagcloud a, .skinset-dockpanel .vc_sep_color_skin_element .vc_sep_line, .skinset-dockpanel hr, .skinset-dockpanel #lang_sel_list li, .skinset-dockpanel .commentlist .children li.comment, .skinset-dockpanel .commentlist > li.comment, .skinset-dockpanel .autototop a, .skinset-dockpanel .row.custom-row-inherit, .skinset-dockpanel .splitter ul li.active, .skinset-dockpanel .vc_progress_bar .vc_single_bar, .skinset-dockpanel .twitter-wrap, .skinset-dockpanel table tr, .skinset-dockpanel .author-info, .skinset-dockpanel .author-info:after, .skinset-dockpanel .commentlist .comment-content, .skinset-dockpanel .commentlist .comment-content:after, .skinset-dockpanel div.wp-caption, .skinset-dockpanel .gallery-caption, .skinset-dockpanel ul.post-metadata-wrap, .skinset-dockpanel #related_posts .related_post_wrap, .skinset-dockpanel .socialicons ul li a, .skinset-dockpanel span.tooltip, .skinset-dockpanel nav.pagination .page-numbers, .skinset-dockpanel .woocommerce-pagination ul .page-numbers, .skinset-dockpanel span.highlight.three, .skinset-dockpanel .vc_cta3.vc_cta3-color-skin_element.vc_cta3-style-classic, .skinset-dockpanel .vc_cta3.vc_cta3-color-skin_element.vc_cta3-style-outline, .skinset-dockpanel .wpb_single_image .vc_single_image-wrapper.vc_box_border, .skinset-dockpanel .wpb_single_image .vc_single_image-wrapper.vc_box_border_circle, .skinset-dockpanel .vc_tta-tabs.vc_tta-color-shaded_color.vc_tta-style-outline .vc_tta-tab > a, .skinset-dockpanel .vc_tta.vc_general.vc_tta-color-shaded_color.vc_tta-style-outline .vc_tta-panels, .skinset-dockpanel .vc_tta.vc_tta-style-outline.vc_tta-color-shaded_color .vc_tta-panel-body::after, .skinset-dockpanel .vc_tta.vc_tta-style-outline.vc_tta-color-shaded_color .vc_tta-panel-body::before, .skinset-dockpanel .vc_tta-tabs.vc_tta-color-shaded_color .vc_tta-panel-heading, .skinset-dockpanel .vc_tta-color-shaded_color.vc_tta-style-classic.vc_tta-accordion .vc_tta-panel .vc_tta-panel-body, .skinset-dockpanel .vc_tta-color-shaded_color.vc_tta-style-classic.vc_tta-accordion .vc_tta-panel .vc_tta-panel-heading, .skinset-dockpanel .vc_tta-color-shaded_color.vc_tta-style-outline.vc_tta-accordion .vc_tta-panel .vc_tta-panel-body, .skinset-dockpanel .vc_tta-color-shaded_color.vc_tta-style-outline.vc_tta-accordion .vc_tta-panel .vc_tta-panel-heading, .skinset-dockpanel .vc_message_box-outline.vc_color-shaded_color, .skinset-dockpanel .vc_message_box-standard.vc_color-shaded_color, .skinset-dockpanel .vc_message_box-solid-icon.vc_color-shaded_color, .skinset-dockpanel .vc_message_box-3d.vc_color-shaded_color, .skinset-dockpanel .wpb_wrapper .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-outline.vc_icon_element-background-color-skin_element {
            border-color: #ededed;
        }

        .skinset-dockpanel .vc_message_box-3d.vc_color-shaded_color {
            box-shadow: 0 5px 0 #dedede;
        }
    </style>
    <link rel='stylesheet' id='ihover-css' href='{{asset('css/ihover.min.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' id='nucleo-outline-css'  href='{{asset('css/483373bf0c35a87911d92d7f990282ac.css')}}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='animate-css-css' href='{{asset('css/animate.min3c21.css?ver=5.1.1')}}' type='text/css' media='all'/>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var ajax_var = {
            "url": "http:\/\/you.acoda.com\/agency-wordpress-theme\/wp-admin\/admin-ajax.php",
            "nonce": "dca872ed98"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset('js/post-like.min5152.js?ver=1.0')}}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "http:\/\/you.acoda.com\/agency-wordpress-theme\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            }, "recaptcha": {"messages": {"empty": "Please verify that you are not a robot."}}, "cached": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset('js/d9cc8f6a8cd554fb7df651a16b962270.js')}}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var FONTS = {"families": ["Montserrat:700,700", "Roboto:300,regular"]};
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset('js/05842341e4da477fc447a9cdb3acc4bc.js')}}' ></script>
    <script type='text/javascript' src='{{asset('js/row-shapes.min2af5.js?ver%5B0%5D=jquery&amp;ver%5B1%5D=acoda-script')}}' ></script>
    <script type='text/javascript' src='{{asset('js/waypoints.min3c21.js?ver=5.1.1')}}' ></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var LIGHTBOX_OPTIONS = {"classes": ""};
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset('js/jquery.fancybox.min0556.js?ver%5B0%5D=jquery')}}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var THEME_OPTIONS = {
            "template_url": "http:\/\/you.acoda.com\/agency-wordpress-theme\/wp-content\/themes\/you",
            "branding_2x": "",
            "branding_2x_transparent": ""
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset('js/dc26ea19938ddd175c5a8873affc26a6-1.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/wp-embed.min33a6.js?ver=4.9')}}'></script>
    <script type='text/javascript' src='{{asset('js/js_composer_front.min3c21.js?ver=5.1.1')}}'></script>
    <script type='text/javascript' src='{{asset('js/skrollr.min3c21.js?ver=5.1.1')}}' ></script>
    <script type='text/javascript' src='{{asset('js/jquery.cycle.plugin.min0556.js?ver%5B0%5D=jquery')}}'></script>
    <script type='text/javascript' src='{{asset('js/touch.gestures.min0556.js?ver%5B0%5D=jquery')}}'></script>
    <script type='text/javascript' src='{{asset('js/stage.slider.min6ecb.js?ver%5B0%5D=jquery-cycle')}}' ></script>
    <script type='text/javascript' src='{{asset('js/jquery.isotope.min0556.js?ver%5B0%5D=jquery')}}'></script>
@endsection