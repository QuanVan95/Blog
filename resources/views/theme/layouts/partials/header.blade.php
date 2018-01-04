<header>
<div class="home page-template-default page page-id-6 skinset-background acoda-skin dock_layout_2 dock_float icon-xlarge wpb-js-composer js-comp-ver-5.1.1 vc_responsive"
    itemscope="itemscope" itemtype="http://schema.org/WebPage"


        itemscope itemtype="http://schema.org/Article" id="primary-wrapper"
     class="layout-wide page_layout_one header_float transparent dir-nav-icon  animate-3d">
    <div class="site-inwrap clearfix">
        <a id="top"></a>
        <nav class="dock-panel-wrap animate-3d dock_layout_2 dock_float dockpanel_type_3 icon-xlarge skinset-dockbar acoda-skin top_bar">
            <div class="dock-panel-inner row clearfix">
                <div class="dock-panels clearfix">
                    <ul class="dock-panel clearfix ">
                        <li class="dock-menu-close dock-tab"><a class="dock-tab-trigger" href="#"><i
                                        class="fa fa-lg">X</i></a></li>
                        <li class="dock-menu-trigger dock-tab desktop mobile"><a data-show-dock="dock-menu"
                                                                                 class="dock-tab-trigger" href="#"><i
                                        class="fa fa-bars fa-lg"></i></a><a data-show-dock="dock-menu"
                                                                            class="dock-tab-trigger text" href="#"><span
                                        class="dock-icon-text">MENU</span></a></li>
                    </ul>
                    <div class="dock-tab-wrapper dock-menu">
                        <span class="pointer"></span>
                        <div class="background-wrap skinset-dockpanel dock-menu-tabs acoda-skin">
                            <div class="infodock-innerwrap clearfix">
                                <ul id="menu-demo-2" class="dock_menu main clearfix mobile">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item">
                                        <a href="{{route('home')}}"><span class="menutitle">Home</span></a></li>
                                    @foreach($listMenu as $menu)
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="{{route("$menu->key.show")}}"><span class="menutitle">{{$menu->name}}</span></a></li>

                                    @endforeach
                                </ul>
                                <ul>
                                    <li id="acoda_editor_widget-2" class="widget acoda_Editor_Widget"><p> </p>
                                        <h3 style="text-align: center;">Let&#8217;s be Sociable</h3>
                                        <p>
                                        <div class="socialicons display medium center  clearfix">
                                            <ul>

                                                <li class="dock-tab social-facebook">
                                                    <a href="http://www.facebook.com/sharer.php?u=http://nogard.asia/"
                                                       rel="nofollow" title="Facebook" data-test="test"
                                                       onclick="javascript:window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600&quot;)"
                                                       target="_blank"><i class="social-icon fa fa-lg fa-facebook"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                        </p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="header-float-wrap header_float transparent clearfix">
            <header id="header-wrap"
                    class="layout_2 vertical_layout_1 header_float transparent dock_layout_2 dock_float animate-3d clearfix skinset-header acoda-skin"
                    itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
                <div class="header-overlay"></div>
                <div class="header-wrap-inner">
                    <div id="header" class="row  fullwidth">
                        <div class="columns large-12 inner-wrap clearfix">
                            <div id="header-logo">
                                <div class="fixed-logo"><img
                                            src="{{ asset('images/logos/'. $configs[0]['logo']) }}"
                                                alt="You | Agency"/>
                                </div>
                            </div><!-- /header-logo -->
                        </div><!-- /inner-wrap -->
                    </div><!-- /header -->
                </div><!-- /header-inner-wrap -->
            </header><!-- /header-wrap -->
        </div>
