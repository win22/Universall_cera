<div class="page home-style1">
    <header id="header" class="header header-style1 "  >

        <!--        premier ligne-->
        <div style="background-color: #0b85ea" class="header-top ">
            <div class="container">
                <div class="rows">
                    <!-- SIDEBAR TOP MENU -->
                    <div class="pull-left top1 reveal">
                        <div id="rester" style="color: white; font-family: 'Manjari Bold'; font-size: 18px" class="test call-us "><span></span>Restez chez vous s'il vous plait</div>
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
                                    <div class="reveal-2 topsearch-entry" >
                                        <form action="{{ route('search') }}" method="post">
                                            @csrf
                                            <input style="background-color: white; border-color: orange" type="text"  required value="" name="search" placeholder="Recherche...">

                                            <button type="submit" title="Search" class="fa fa-search button-search-pro"></button><br>
                                            @if($errors->has('search'))
                                            <small style="padding-top: 15px !important; color: white" id="emailHelp" class="form-text">{{$errors->first('search')}}</small>
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
                                            <li class="{{ request()->is('shop')? 'active' : '' }} menu-about-us">
                                                <a class="item-link" href="/shop">Magasin</a>
                                            </li>

                                            <li class="{{ request()->is('about')? 'active' : '' }} menu-contact-us">
                                                <a class="item-link" href="{{ route('about') }}">A propos de nous</a>
                                            </li>

                                            <li class="{{ request()->is('contact')? 'active' : '' }} menu-about-us">
                                                <a class="item-link" href="{{ route('contact') }}">Nous contacter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <ul id="menu-primary-menu-1" class="reveal-2 nav nav-pills nav-mega etrostore-mega etrostore-menures">
                                    <li class="{{ request()->is('/')? 'active' : '' }} menu-about-us etrostore-menu-custom level1">
                                        <a href="/" class="item-link">
                                                    <span class="have-title">
                                                        <span class="menu-title">Acceuil</span>
                                                    </span>
                                        </a>

                                    </li>

                                    <li class="{{ request()->is('shop')? 'active' : '' }}  menu-about-us etrostore-menu-custom level1">
                                        <a href="{{ route('shop') }}" class="item-link">
                                                    <span class="have-title">
                                                        <span class="menu-title">Magasin</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class=" {{ request()->is('about')? 'active' : '' }} menu-about-us etrostore-menu-custom level1">
                                        <a href="{{ route('about') }}" class="item-link">
                                                    <span class="have-title">
                                                        <span class="menu-title">A propos </span>
                                                    </span>
                                        </a>

                                    </li>

                                    <li class="{{ request()->is('contact')? 'active' : '' }} menu-contact-us etrostore-menu-custom level1">
                                        <a

                                             href="{{ route('contact') }}" class="item-link">
                                                    <span class="have-title">
                                                        <span class="menu-title">Nous contacter</span>
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
                                        <h4 id="rester" style="color: #ffffff " aria-hidden="true"><span style="color: white"></span>Restez chez vous!</h4>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
