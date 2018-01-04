<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
@include('theme.layouts.partials.head')

<body class="page page-template page-template-full_width page-template-full_width-php ajax_fade page_not_loaded  qode-title-hidden qode_grid_1300 qode_popup_menu_push_text_top qode-content-sidebar-responsive qode-theme-ver-9.3 wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive">
<div class="ajax_loader">
    <div class="ajax_loader_1">
        <div class="pulse"></div>
    </div>
</div>
<div class="wrapper">
    <div class="wrapper_inner">
@include('theme.layouts.partials.header')
@yield('content')

    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
@include('theme.layouts.partials.foot')
</body>
</html>
