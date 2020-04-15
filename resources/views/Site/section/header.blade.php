
<div class="page home-style1">
    <header id="header" class="header header-style1"  >

        <!--        premier ligne-->
        <div style="background-color: #0b85ea" class="header-top">
            <div class="container">
                <div class="rows">
                    <!-- SIDEBAR TOP MENU -->
                    <div class="pull-left top1">
                        <div id="rester" style="color: white; font-family: 'Manjari Bold'; font-size: 18px" class="call-us"><span></span>Restez chez vous s'il vous plait</div>
                    </div>

                    <div class="pull-right">


                        <div class="pull-left top2">
                            <div class="widget widget_nav_menu">
                                <div class="widget-inner">
                                    <ul id="menu-checkout" class="menu">
                                        <li class="menu-checkout">
                                            <a class="item-link" href="checkout.html">
                                                <span class="menu-title"><i class="fa fa-phone"></i> (+221) 33 878 65 60</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="background-image: url({{ asset('site/images/icons/bg-header.jpg')}}) !important" class="header-mid">
            <div class="container">
                <div class="rows">
                    <!-- LOGO -->
                    <div class="etrostore-logo pull-left">
                        <a href="/">
                            <img  style="height: 50px" src="{{ asset('site/images/icons/logoucs.jpg') }}" alt="Shoopy">
                        </a>
                    </div>

                    <div class="mid-header pull-right">
                        <div class="widget sw_top-2 sw_top">
                            <div class="widget-inner">
                                <div class="top-form top-search" >
                                    <div class="topsearch-entry" >
                                        <form action="{{ route('search') }}" method="post">
                                            @csrf
                                            <input style="background-color: white; border-color: orange" type="text" value="" name="search" placeholder="Recherche...">

                                            <div style="background-color: white; border-color: orange" class="cat-wrapper">
                                                <label style="background-color: white" class="label-search">
                                                    <select style="background-color: white" name="search_category" class="s1_option">
                                                        <option value="">Choisir</option>
                                                        <option value="3">Sol</option>
                                                        <option value="7">Faiences</option>
                                                        <option value="8">Façades</option>
                                                        <option value="14">Lavabo</option>
                                                        <option value="12">Sanitaire</option>


                                                    </select>
                                                </label>
                                            </div>


                                            <button type="submit" title="Search" class="fa fa-search button-search-pro"></button><br>
                                            @if($errors->has('search'))
                                            <small style="padding-top: 15px !important; color: white" id="emailHelp" class="form-text">{{$errors->first('search')}}</small>
                                            @endif
                                            @if($errors->has('search_category'))
                                            <small style="padding-top: 15px !important; color: white; padding-left: 40%" id="emailHelp" class="form-text">{{$errors->first('search_category')}}</small>
                                            @endif
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div style="background-image: url({{ asset('site/images/icons/bg-header.jpg')}}) !important" class="header-bottom">
            <div class="container">
                <div class="rows">
                    <!-- Primary navbar -->
                    <div id="main-menu" class="main-menu">
                        <nav id="primary-menu" class="primary-menu">
                            <div class="navbar-inner navbar-inverse">
                                <div class="resmenu-container">
                                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#ResMenuprimary_menu">
                                        <span class="sr-only">Categories</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <div id="ResMenuprimary_menu" class="collapse menu-responsive-wrapper">
                                        <ul id="menu-primary-menu" class="etrostore_resmenu">
                                            <li class="{{ request()->is('/')? 'active' : '' }} menu-about-us">
                                                <a class="item-link" href="/">Acceuil </a>
                                            </li>
                                            <li class="{{ request()->is('/shop')? 'active' : '' }} menu-about-us">
                                                <a class="item-link" href="/shop">Magasin</a>
                                            </li>

                                            <li class="{{ request()->is('/about')? 'active' : '' }} menu-contact-us">
                                                <a class="item-link" href="{{ route('about') }}">A propos de nous</a>
                                            </li>

                                            <li class="{{ request()->is('/contact')? 'active' : '' }} menu-about-us">
                                                <a class="item-link" href="{{ route('contact') }}">Nous contacter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <ul id="menu-primary-menu-1" class="nav nav-pills nav-mega etrostore-mega etrostore-menures">
                                    <li class="{{ request()->is('/')? 'active' : '' }} menu-about-us etrostore-menu-custom level1">
                                        <a href="/" class="item-link">
                                                    <span class="have-title">
                                                        <span class="menu-title">Acceuil</span>
                                                    </span>
                                        </a>

                                    </li>

                                    <li class="{{ request()->is('/shop')? 'active' : '' }}  menu-about-us etrostore-menu-custom level1">
                                        <a href="{{ route('shop') }}" class="item-link">
                                                    <span class="have-title">
                                                        <span class="menu-title">Magasin</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class=" {{ request()->is('/about')? 'active' : '' }} menu-about-us etrostore-menu-custom level1">
                                        <a href="{{ route('about') }}" class="item-link">
                                                    <span class="have-title">
                                                        <span class="menu-title">A propos </span>
                                                    </span>
                                        </a>

                                    </li>

                                    <li class="menu-contact-us etrostore-menu-custom level1">
                                        <a href="{{ route('contact') }}" class="item-link">
                                                    <span class="have-title">
                                                          <span class=" {{ request()->is('contact')? 'yel2' : '' }} menu-title  ">Nous contacter</span>
                                                    </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- /Primary navbar -->
                    <p hidden class="alert ">{{ $message = Session::get('message')}}</p>
                    @if($message)
                    <div id="alert" style="padding-top: 10px!important; background-color: #ffaa00 ; color: white !important" class="alert  alert-with-icon small right ml-5">
                        <i class="fa fa-bell" data-notify="icon"></i>
                        </button>
                        <span class="text-center data-notify="message"> {{$message }} </span>
                    </div>
                    {{ Session::put('message',NULL) }}
                    @endif
                    <div class="mid-header pull-right">
                        <div class="widget sw_top">
                                    <span class="stick-sr">
                                        <p id="rester" style="color: #ffffff " aria-hidden="true"><span style="color: white"></span>Restez chez vous!</p>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div  class="container">
        <div class="row">
            <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="post-6 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div style="margin-bottom: -28px !important;" class="entry-summary">
                            <div   data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row vc_row-fluid bg-wrap homepage1_custom vc_row-no-padding">
                                <div class="container float vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div   class="wpb_wrapper">
                                            <div  class="vc_row vc_inner vc_row-fluid ">
                                                <div class="wrap-vertical vc_column_container vc_col-sm-2">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="vc_wp_custommenu wpb_content_element wrap-title">
                                                                <div class="mega-left-title">
                                                                    <strong>Categories</strong>
                                                                </div>

                                                                <div class="wrapper_vertical_menu vertical_megamenu">
                                                                    <div class="resmenu-container">
                                                                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#ResMenuvertical_menu">
                                                                            <span class="sr-only">Categories</span>
                                                                            <span class="icon-bar"></span>
                                                                            <span class="icon-bar"></span>
                                                                            <span class="icon-bar"></span>
                                                                        </button>

                                                                        <div id="ResMenuvertical_menu" class="collapse menu-responsive-wrapper">
                                                                            <ul id="menu-vertical-menu" class="etrostore_resmenu">
                                                                                <li class="menu-computers-laptops">
                                                                                    <a class="item-link" href="{{ route('category', 3) }}">Sol</a>
                                                                                </li>
                                                                                <li class="menu-computers-laptops">
                                                                                    <a class="item-link" href="{{ route('category', 7) }}">Faiences</a>
                                                                                </li>
                                                                                <li class="menu-computers-laptops">
                                                                                    <a class="item-link" href="{{ route('category', 8) }}">Facades</a>
                                                                                </li>

                                                                                <li class="menu-vacuum-cleaner">
                                                                                    <a class="item-link" href="{{ route('category', 12) }}">Salle de bain</a>
                                                                                </li>
                                                                                <li class="menu-computers-laptops">
                                                                                    <a class="item-link" href="{{ route('category', 12) }}">Sanitaire</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <ul id="menu-vertical-menu-1" class="nav vertical-megamenu etrostore-mega etrostore-menures">
                                                                        <li class="menu-computers-laptops etrostore-menu-custom level1">
                                                                            <a href="{{ route('category', 3) }}" class="item-link">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-color" data-color="#7ac143"></span>

                                                                                            <span class="menu-title">Sol</span>
                                                                                        </span>
                                                                            </a>
                                                                        </li>

                                                                        <li class="menu-computers-laptops etrostore-menu-custom level1">
                                                                            <a href="{{ route('category', 7) }}" class="item-link">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-color" data-color="#f03442"></span>
                                                                                            <span class="menu-title">Faiences</span>
                                                                                        </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-computers-laptops etrostore-menu-custom level1">
                                                                            <a href="{{ route('category', 8) }}" class="item-link">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-color" data-color="#efc73a"></span>

                                                                                            <span class="menu-title">Facades</span>
                                                                                        </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-computers-laptops etrostore-menu-custom level1">
                                                                            <a href="{{ route('category', 10) }}" class="item-link">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-color" data-color="#42b8d1"></span>

                                                                                            <span class="menu-title">Salle de bain</span>
                                                                                        </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-computers-laptops etrostore-menu-custom level1">
                                                                            <a href="{{ route('category', 12) }}" class="item-link">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-color" data-color="#7ac143"></span>

                                                                                            <span class="menu-title">Sanitaire</span>
                                                                                        </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-computers-laptops etrostore-menu-custom level1">
                                                                            <a href="{{ route('category', 14) }}" class="item-link">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-color" data-color="#42b8d1"></span>

                                                                                            <span class="menu-title">Lavabo</span>
                                                                                        </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-computers-laptops etrostore-menu-custom level1">
                                                                            <a href="{{ route('category', 11) }}" class="item-link">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-color" data-color="#7ac143"></span>

                                                                                            <span class="menu-title">Décoration</span>
                                                                                        </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-computers-laptops etrostore-menu-custom level1">
                                                                            <a href="{{ route('category', 3) }}" class="item-link">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-color" data-color="#42b8d1"></span>

                                                                                            <span class="menu-title">Sol</span>
                                                                                        </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-computers-laptops etrostore-menu-custom level1">
                                                                            <a href="{{ route('category', 9) }}" class="item-link">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-color" data-color="#13528c"></span>

                                                                                            <span class="menu-title">Faiences cuisines</span>
                                                                                        </span>
                                                                            </a>
                                                                        </li>

                                                                        <li class="menu-computers-laptops etrostore-menu-custom level1">
                                                                            <a href="{{ route('category', 10) }}" class="item-link">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-color" data-color="#13528c"></span>

                                                                                            <span class="menu-title">Faiences salle de bain</span>
                                                                                        </span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="wrap-slider vc_column_container vc_col-sm-8">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <!-- OWL SLIDER -->
                                                            <div class="wpb_revslider_element wpb_content_element no-margin">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_revslider_element wpb_content_element">
                                                                            <div id="main-slider" class="fullwidthbanner-container" style="position:relative; width:800px;  !important; margin-top:0px; margin-bottom:0px">
                                                                                <div class="module slideshow no-margin">
                                                                                    <div class="item">
                                                                                        <a href="simple_product.html"><img src="{{ asset('site/images/1903/sli5.jpg') }} " alt="slider1" class="img-responsive" style="height: 530px"></a>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <a href="simple_product.html"><img src="{{ asset('site/images/1903/sl1.jpg') }}" alt="slider2" class="img-responsive" style="height: 530px"></a>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <a href="simple_product.html"><img src="{{ asset('site/images/1903/sl2.jpg') }}" alt="slider3" class="img-responsive" style="height: 530px"></a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="loadeding"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- OWL LIGHT SLIDER -->


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="wrap-banner vc_column_container vc_col-sm-2">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_single_image wpb_content_element vc_align_center ">
                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <a href="#" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                                        <img class="vc_single_image-img" src="{{ asset('site/images/1903/ban2.jpg') }}" width="193" height="352" alt="banner1" title="banner1" />
                                                                    </a>
                                                                </figure>
                                                            </div>

                                                            <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <a href="#" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                                        <img class="vc_single_image-img" src="{{ asset('site/images/1903/ban3.jpg') }}" width="193" height="125" alt="banner2" title="banner2" />
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="wrap-transport">
                                                        <div class="row">
                                                            <div class="item item-1 col-lg-3 col-md-3 col-sm-6">
                                                                <a href="#" class="wrap">
                                                                    <div class="icon">
                                                                        <i class="fa fa-paper-plane"></i>
                                                                    </div>

                                                                    <div class="content">
                                                                        <h3>Garentie de remboursement</h3>

                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="item item-2 col-lg-3 col-md-3 col-sm-6">
                                                                <a href="#" class="wrap">
                                                                    <div class="icon">
                                                                        <i class="fa fa-map-marker"></i>
                                                                    </div>

                                                                    <div class="content">
                                                                        <h3>Livraison Gratuite à travers le Sénégal</h3>

                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="item item-3 col-lg-3 col-md-3 col-sm-6">
                                                                <a href="#" class="wrap">
                                                                    <div class="icon">
                                                                        <i class="fa fa-tag"></i>
                                                                    </div>

                                                                    <div class="content">
                                                                        <h3>Remise aux Clients fidèles</h3>

                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="item item-4 col-lg-3 col-md-3 col-sm-6">
                                                                <a href="#" class="wrap">
                                                                    <div class="icon">
                                                                        <i class="fa fa-life-ring"></i>
                                                                    </div>

                                                                    <div class="content">
                                                                        <h3>Notre boutique ouverte 7/7</h3>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

