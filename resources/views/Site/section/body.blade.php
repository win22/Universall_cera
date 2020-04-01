<div class="page home-style3">
    <div class="container">
        <div class="row">
            <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="post-6 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div   class="entry-summary">

                            <div class="vc_row vc_row-fluid margin-bottom-30">
                                <div class="vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center banner-none">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <a href="#" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                        <img class="vc_single_image-img " src="{{ asset('site/images/1903/banniere.jpg') }}" width="1170" height="130" alt="banner3-4" title="banner3-4">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row vc_row-fluid margin-bottom-30">
                                <div class="vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div id="_sw_countdown_01" class="sw-woo-container-slider responsive-slider countdown-slider countdown-slider2" data-lg="5" data-md="4" data-sm="2" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false" data-circle="false">
                                                <div class="resp-slider-container">
                                                    <div class="box-title clearfix">
                                                        <h3>Produits tendances</h3>
                                                        <a href="#">voir tout</a>
                                                    </div>

                                                    <div class="slider responsive">
                                                        @foreach($sol_catalogue as $sol)
                                                        <div class="item-countdown product" >
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">

                                                                        <h4>
                                                                            <a href="simple_product.html" title="veniam dolore">{{ $sol->model }} </a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">

                                                                            <ins>
                                                                                {{ $sol->prix }} FCFA
                                                                            </ins>
                                                                        </div>
                                                                        <div>
                                                                            <p>Catégorie : céramique</p>
                                                                        </div>
                                                                        <div class="sale-off">new</div>
                                                                    </div>

                                                                    <div class="item-image-countdown">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img  style="width: 160px !important; height: 150px ! important"	width="300" height="100" src="{{ URL::to(asset($sol->image)) }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="{{ URL::to(asset($sol->image)) }} 100w, {{ URL::to(asset($sol->image)) }} 150w, {{ URL::to(asset($sol->image)) }} 180w,{{ URL::to(asset($sol->image)) }} 600w"
                                                                                        sizes="(max-width: 300px) 100vw, 300px" />
                                                                            </div>
                                                                        </a>

                                                                        <!-- add to cart, wishlist, compare -->
                                                                        <div class="item-bottom clearfix">
                                                                            <a style="background-color: tomato; color:white; padding-right: 10px" class="btn btn-sm">Voir les détails</a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="product-countdown" data-date="1519776000" data-price="$250" data-starttime="1483747200" data-cdtime="1519776000" data-id="product_sw_countdown_02"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_row vc_row-fluid margin-bottom-30">
                                <div class="vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center banner-none">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <a href="#" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                        <img class="vc_single_image-img " src="{{ asset('site/images/1903/banniere.jpg') }}" width="1170" height="130" alt="banner3-4" title="banner3-4">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row vc_row-fluid margin-bottom-30">
                                <div class="vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div id="slider_sw_woo_slider_widget_2" class="responsive-slider woo-slider-default sw-child-cat2" data-lg="5" data-md="4" data-sm="2" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false" data-circle="false">
                                                <div class="child-top clearfix">
                                                    <div class="box-title pull-left">
                                                        <h3>Nouveau produits</h3>
                                                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#child_sw_woo_slider_02" aria-expanded="false">
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                    </div>

                                                    <div class="box-title-right clearfix">
                                                        <div class="view-all pull-left">
                                                            <a href="shop_right_sidebar.html">
                                                                Voir tout<i class="fa fa-caret-right"></i>
                                                            </a>
                                                        </div>

                                                        <div class="childcat-content pull-right" id="child_sw_woo_slider_02">
                                                            <ul>
                                                                <li><a href="shop_right_sidebar.html">Lavabos</a></li>
                                                                <li><a href="shop_right_sidebar.html">Sanitaires</a></li>
                                                                <li><a href="shop_right_sidebar.html">Fainces</a></li>
                                                                <li><a href="shop_right_sidebar.html">Sol</a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="resp-slider-container">
                                                    <div class="slider responsive">
                                                        @foreach($all_product as $all)
                                                        <div class="item product" id="product_sw_countdown_14">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">

                                                                        <h4>
                                                                            <a href="simple_product.html" title="veniam dolore">{{ $all->model }}</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <ins style="color: tomato">
                                                                               {{ $all->prix }} FCFA
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">New</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img  style="width: 160px !important; height: 150px ! important"	width="300" height="100" src="{{ URL::to(asset($all->image)) }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                      srcset="{{ URL::to(asset($all->image)) }} 100w, {{ URL::to(asset($all->image)) }} 150w, {{ URL::to(asset($all->image)) }} 180w,{{ URL::to(asset($all->image)) }} 600w"
                                                                                      sizes="(max-width: 300px) 100vw, 300px" />
                                                                            </div>
                                                                        </a>

                                                                        <!-- add to cart, wishlist, compare -->
                                                                        <div class="item-bottom clearfix">
                                                                            <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                                                                            <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                                                                            <div class="yith-wcwl-add-to-wishlist ">
                                                                                <div class="yith-wcwl-add-button show" style="display:block">
                                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                                                    <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                                                                </div>

                                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                                    <span class="feedback">Product added!</span>
                                                                                    <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                                </div>

                                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                                    <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                                </div>

                                                                                <div style="clear:both"></div>
                                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                            </div>

                                                                            <div class="clear"></div>
                                                                            <a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_row vc_row-fluid margin-bottom-60">
                                <div class="vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-6 vc_col-xs-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div id="sw_recommend_product-01" class="sw-recommend-product vc_element sw-accordion-product">
                                                <div class="box-slider-title">
                                                    <h2>Sanitaire</h2>
                                                </div>

                                                <div class="wrap-content">
                                                    @foreach($sanitaire_catalogue as $sanitaire)
                                                    <div class="item cf">
                                                        <div class="item-inner">
                                                            <div class="item-img">
                                                                <a href="simple_product.html" title="Veniam dolore">
                                                                    <img style="width: 60px; height: 70px"	width="180" height="180" src="{{ URL::to(asset($sanitaire->image)) }}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                                                            srcset="{{ URL::to(asset($sanitaire->image)) }} 180w, {{ URL::to(asset($sanitaire->image)) }} 150w, {{ URL::to(asset($sanitaire->image)) }} 300w, {{ URL::to(asset($sanitaire->image)) }} 600w"
                                                                            sizes="(max-width: 180px) 50vw, 180px" />
                                                                </a>
                                                            </div>

                                                            <div class="item-content">
                                                                <!-- rating  -->
                                                                <div class="reviews-content">

                                                                    <div class="item-number-rating">
                                                                        Produit de type céramique
                                                                    </div>
                                                                </div>
                                                                <!-- end rating  -->

                                                                <h4>
                                                                    <a href="simple_product.html" title="veniam dolore">{{ $sanitaire->model }}</a>
                                                                </h4>

                                                                <!-- price -->
                                                                <div class="item-price">
                                                                    <ins style="color: tomato">
                                                                        {{ $sanitaire->prix }} FCFA
                                                                    </ins>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-6 vc_col-xs-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div id="sw_recommend_product-01" class="sw-recommend-product vc_element sw-accordion-product">
                                                <div class="box-slider-title">
                                                    <h2>Sol</h2>
                                                </div>

                                                <div class="wrap-content">
                                                    @foreach($sanitaire_catalogue as $sanitaire)
                                                    <div class="item cf">
                                                        <div class="item-inner">
                                                            <div class="item-img">
                                                                <a href="simple_product.html" title="Veniam dolore">
                                                                    <img style="width: 60px; height: 70px"	width="180" height="180" src="{{ URL::to(asset($sanitaire->image)) }}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                                                         srcset="{{ URL::to(asset($sanitaire->image)) }} 180w, {{ URL::to(asset($sanitaire->image)) }} 150w, {{ URL::to(asset($sanitaire->image)) }} 300w, {{ URL::to(asset($sanitaire->image)) }} 600w"
                                                                         sizes="(max-width: 180px) 50vw, 180px" />
                                                                </a>
                                                            </div>

                                                            <div class="item-content">
                                                                <!-- rating  -->
                                                                <div class="reviews-content">

                                                                    <div class="item-number-rating">
                                                                        Produit de type céramique
                                                                    </div>
                                                                </div>
                                                                <!-- end rating  -->

                                                                <h4>
                                                                    <a href="simple_product.html" title="veniam dolore">{{ $sanitaire->model }}</a>
                                                                </h4>

                                                                <!-- price -->
                                                                <div class="item-price">
                                                                    <ins style="color: tomato">
                                                                        {{ $sanitaire->prix }} FCFA
                                                                    </ins>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-6 vc_col-xs-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div id="sw_recommend_product-01" class="sw-recommend-product vc_element sw-accordion-product">
                                                <div class="box-slider-title">
                                                    <h2>Sanitaire</h2>
                                                </div>

                                                <div class="wrap-content">
                                                    @foreach($sanitaire_catalogue as $sanitaire)
                                                    <div class="item cf">
                                                        <div class="item-inner">
                                                            <div class="item-img">
                                                                <a href="simple_product.html" title="Veniam dolore">
                                                                    <img style="width: 60px; height: 70px"	width="180" height="180" src="{{ URL::to(asset($sanitaire->image)) }}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                                                         srcset="{{ URL::to(asset($sanitaire->image)) }} 180w, {{ URL::to(asset($sanitaire->image)) }} 150w, {{ URL::to(asset($sanitaire->image)) }} 300w, {{ URL::to(asset($sanitaire->image)) }} 600w"
                                                                         sizes="(max-width: 180px) 50vw, 180px" />
                                                                </a>
                                                            </div>

                                                            <div class="item-content">
                                                                <!-- rating  -->
                                                                <div class="reviews-content">

                                                                    <div class="item-number-rating">
                                                                        Produit de type céramique
                                                                    </div>
                                                                </div>
                                                                <!-- end rating  -->

                                                                <h4>
                                                                    <a href="simple_product.html" title="veniam dolore">{{ $sanitaire->model }}</a>
                                                                </h4>

                                                                <!-- price -->
                                                                <div class="item-price">
                                                                    <ins style="color: tomato">
                                                                        {{ $sanitaire->prix }} FCFA
                                                                    </ins>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-6 vc_col-xs-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div id="sw_recommend_product-01" class="sw-recommend-product vc_element sw-accordion-product">
                                                <div class="box-slider-title">
                                                    <h2>Sanitaire</h2>
                                                </div>

                                                <div class="wrap-content">
                                                    @foreach($sanitaire_catalogue as $sanitaire)
                                                    <div class="item cf">
                                                        <div class="item-inner">
                                                            <div class="item-img">
                                                                <a href="simple_product.html" title="Veniam dolore">
                                                                    <img style="width: 60px; height: 70px"	width="180" height="180" src="{{ URL::to(asset($sanitaire->image)) }}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                                                         srcset="{{ URL::to(asset($sanitaire->image)) }} 180w, {{ URL::to(asset($sanitaire->image)) }} 150w, {{ URL::to(asset($sanitaire->image)) }} 300w, {{ URL::to(asset($sanitaire->image)) }} 600w"
                                                                         sizes="(max-width: 180px) 50vw, 180px" />
                                                                </a>
                                                            </div>

                                                            <div class="item-content">
                                                                <!-- rating  -->
                                                                <div class="reviews-content">

                                                                    <div class="item-number-rating">
                                                                        Produit de type céramique
                                                                    </div>
                                                                </div>
                                                                <!-- end rating  -->

                                                                <h4>
                                                                    <a href="simple_product.html" title="veniam dolore">{{ $sanitaire->model }}</a>
                                                                </h4>

                                                                <!-- price -->
                                                                <div class="item-price">
                                                                    <ins style="color: tomato">
                                                                        {{ $sanitaire->prix }} FCFA
                                                                    </ins>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_row vc_row-fluid margin-bottom-30">
                                <div class="vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class=" wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="wrap-transport">
                                                        <div class="row">
                                                            <div class="item item-1 col-lg-3 col-md-3 col-sm-6">
                                                                <a href="#" class="bg-wrap">
                                                                    <div class="wrap">
                                                                        <div class="icon">
                                                                            <i class="fa fa-paper-plane"></i>
                                                                        </div>

                                                                        <div class="content">
                                                                            <h3>Money Back Guarantee</h3>
                                                                            <p>30 Days Money Back</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="item item-2 col-lg-3 col-md-3 col-sm-6">
                                                                <a href="#" class="bg-wrap">
                                                                    <div class="wrap">
                                                                        <div class="icon">
                                                                            <i class="fa fa-map-marker"></i>
                                                                        </div>

                                                                        <div class="content">
                                                                            <h3>Free Worldwide Shipping</h3>
                                                                            <p>On Order Over $100</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="item item-3 col-lg-3 col-md-3 col-sm-6">
                                                                <a href="#" class="bg-wrap">
                                                                    <div class="wrap">
                                                                        <div class="icon">
                                                                            <i class="fa fa-tag"></i>
                                                                        </div>

                                                                        <div class="content">
                                                                            <h3>Member Discount</h3>
                                                                            <p>Upto 70 % Discount</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="item item-4 col-lg-3 col-md-3 col-sm-6">
                                                                <a href="#" class="bg-wrap">
                                                                    <div class="wrap">
                                                                        <div class="icon">
                                                                            <i class="fa fa-life-ring"></i>
                                                                        </div>

                                                                        <div class="content">
                                                                            <h3>24/7 Online Support</h3>
                                                                            <p>Technical Support 24/7</p>
                                                                        </div>
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

                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>


