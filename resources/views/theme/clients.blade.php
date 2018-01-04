@extends('theme.layouts.app')
@section('pageTitle', 'Clients')
@section('content')
{{--@include('theme.layouts.partials.slide')--}}
<div class="content ">
    <div class="meta">
        <div class="seo_title">Bridge | Clients</div>
        <span id="qode_page_id">109</span>
        <div class="body_classes">
            page,page-id-109,page-template,page-template-full_width,page-template-full_width-php,ajax_fade,page_not_loaded,,qode_grid_1300,qode_popup_menu_push_text_top,qode-content-sidebar-responsive,qode-theme-ver-9.3,wpb-js-composer
            js-comp-ver-4.11.2.1,vc_responsive
        </div>
    </div>
    <div class="content_inner  ">
        <style type="text/css" data-type="vc_shortcodes-custom-css-109">.vc_custom_1464864776684 {
                padding-top: 66px !important;
            }
            .vc_custom_1465384672376 {
                padding-bottom: 120px !important;
            }
        </style>
        <div class="title_outer title_without_animation" data-height="342">
            <div class="title title_size_medium  position_center " style="height:342px;">
                <div class="image not_responsive"></div>
                <div class="title_holder" style="padding-top:67px;height:275px;">
                    <div class="container">
                        <div class="container_inner clearfix">
                            <div class="title_subtitle_holder">
                                <h1><span>{{ $category->title }}</span></h1>
                                <span class="subtitle">{{ $category->description }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full_width">
            <div class="full_width_inner">
                <div class="vc_row wpb_row section vc_row-fluid  vc_custom_1464864776684 grid_section"
                     style=' text-align:left;'>
                    <div class=" section_inner clearfix">
                        <div class='section_inner_margin clearfix'>
                            @foreach($sections as $section)
                            @if($section->active == 1)
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class='image_hover ' style='' data-transition-delay=''>
                                            <div class='images_holder'><a itemprop='url' href='#'
                                                                          target='_self'><img itemprop='image'
                                                                                              class='active_image '
                                                                                              src='{{ asset('images/sections/'. $section->image) }}'
                                                                                              alt=''
                                                                                              style=''/><img
                                                            itemprop='image' class='hover_image'
                                                            src='{{ asset('images/sections/'. $section->sub_image) }}' alt=''
                                                            style=''/></a></div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 31px"><span
                                                    class="vc_empty_space_inner">
                                             <span class="empty_space_image"></span>
                                             </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection