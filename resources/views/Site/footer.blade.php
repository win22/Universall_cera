<div class="class="page home-style1" >
<div class="body-wrapper theme-clearfix">
    <footer id="footer" class="footer default theme-clearfix">
        <!-- Content footer -->
        <div class="container">



            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row vc_row-fluid footer-style1 vc_row-no-padding">
                <div class="container float vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div style="background-color: #00afff; color: white"  class="vc_row vc_inner vc_row-fluid footer-top">
                                <div   class="vc_column_container vc_col-sm-8">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="wrap-newletter">
                                                        <h3>NEWSLETTER</h3>

                                                        <div class="mc4wp-form">
                                                            <div class="newsletter-content">
                                                                <form action="{{ route('newslet') }}" method="POST">
                                                                    @csrf
                                                                    <input type="email" class="newsletter-email" name="email" placeholder="Votre email" required="" />
                                                                    <input class="newsletter-submit" type="submit" value="Souscrire " />
                                                                    @if($errors->has('email'))
                                                                    <small  style="color: white ! important" id="emailHelp" class="form-text">{{$errors->first('email')}}</small>
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

                                <div class="vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class=" wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="shop-social">
                                                        <ul>
                                                            <li>
                                                                <a href="https://www.facebook.com">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="https://twitter.com">
                                                                    <i class="fa fa-twitter"></i>
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

                            <div class="vc_row vc_inner vc_row-fluid footer-bottom">
                                <div class="item-res vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="ya-logo">
                                                        <a href="/">
                                                            <img style="width: 100px" src="{{asset('site/images/icons/logoucs.jpg') }}" alt="logo" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="infomation">
                                                        <p>
                                                        <ul style="color: #ffaa00">
                                                            <li>(+221) 33 878 65 60.</li>
                                                            <li>(801) 2345 - 6788 / (801) 2345 - 6789</li>
                                                            <li><i class=""></i> Adresse:Keur Massar Médina kelle N0 176 P.A, Dakar Sénégal</li>
                                                        </ul>
                                                        </p>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-res vc_column_container vc_col-sm-6 vc_col-lg-2 vc_col-md-2 vc_col-xs-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="vc_wp_custommenu wpb_content_element">
                                                <div class="widget widget_nav_menu">
                                                    <h2 class="widgettitle">Réseaux sociaux </h2>

                                                    <ul id="menu-support" class="menu">
                                                        <li class="menu-product-support">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">Facebook</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-pc-setup-support-services">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">Instagram</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-extended-service-plans">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">Tweeter</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-community">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">Youtube</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-res vc_column_container vc_col-sm-6 vc_col-lg-2 vc_col-md-2 vc_col-xs-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="vc_wp_custommenu wpb_content_element">
                                                <div class="widget widget_nav_menu">
                                                    <h2 class="widgettitle">Liens </h2>
                                                    <ul id="menu-your-links" class="menu">
                                                        <li class="menu-about-us">
                                                            <a class="item-link" href="/">
                                                                <span class="menu-title">Acceuil</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-customer-service">
                                                            <a class="item-link" href="{{ route('shop') }}">
                                                                <span class="menu-title">Magasin</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-privacy-policy">
                                                            <a class="item-link" href="{{ route('about') }}">
                                                                <span class="menu-title">A propos</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-site-map">
                                                            <a class="item-link" href="{{ route('contact') }}">
                                                                <span class="menu-title">Nous contacter</span>
                                                            </a>
                                                        </li>

                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-res vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class=" wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="sp-map">
                                                        <div class="title">
                                                            <h2>Localiser la boutique</h2>
                                                        </div>
                                                        <a style="color: white" target="_blank" href="https://www.google.com/maps/place/UVS+ENO+KEUR+MASSAR/@14.7910234,-17.3140769,14z/data=!4m5!3m4!1s0x0:0x8fa28f8668de1fcd!8m2!3d14.786991!4d-17.311934?hl=fr" class="link-map">Localiser la boutique</a>
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
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>

        <div class="footer-copyright style1">
            <div class="container">
                <!-- Copyright text -->
                <div class="copyright-text pull-left">
                    <p>© 2020. Tous les droits sont réservés</p>
                </div>

                <div class="sidebar-copyright pull-right">
                    <div class="widget text-4 widget_text">
                        <div class="widget-inner">
                            <div class="">
                                <div class="payment">
                                    <a style="color: white" href="#">
                                        <p> Designed by <a style="color: #ffaa00" href="http://nataalagency.com/">   Nataal Agency  </a>.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
