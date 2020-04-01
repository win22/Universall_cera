<div class="page home-style3">
    <div class="container">
        <div class="row">
            <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="post-6 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="entry-summary">


                            <div class="vc_row vc_row-fluid margin-bottom-30">
                                <div class="vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div id="_sw_countdown_01" class="sw-woo-container-slider responsive-slider countdown-slider countdown-slider2" data-lg="5" data-md="4" data-sm="2" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false" data-circle="false">
                                                <div class="resp-slider-container">
                                                    <div class="box-title clearfix">
                                                        <h3>Produit sol</h3>
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
                                                                                <img 	width="300" height="300" src="{{ URL::to(asset($sol->image)) }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="{{ URL::to(asset($sol->image)) }} 300w, site/images/1903/45-150x150.jpg 150w, site/images/1903/45-180x180.jpg 180w, site/images/1903/45.jpg 600w"
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
                                                                                    <img src="site/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
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
                                                        <img class="vc_single_image-img " src="images/1903/banner3-4.jpg" width="1170" height="130" alt="banner3-4" title="banner3-4">
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
                                            <div id="slider_sw_woo_slider_widget_1" class="responsive-slider woo-slider-default sw-child-cat2" data-lg="5" data-md="4" data-sm="2" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false" data-circle="false">
                                                <div class="child-top clearfix">
                                                    <div class="box-title pull-left">
                                                        <h3>Weekly Best Sellers</h3>
                                                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#child_sw_woo_slider_widget_1" aria-expanded="false">
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                    </div>

                                                    <div class="box-title-right clearfix">
                                                        <div class="view-all pull-left">
                                                            <a href="sidebar_product_full.html">See All<i class="fa  fa-caret-right"></i></a>
                                                        </div>

                                                        <div class="childcat-content pull-right" id="child_sw_woo_slider_widget_1">
                                                            <ul>
                                                                <li><a href="sidebar_product_full.html">Blender</a></li>
                                                                <li><a href="sidebar_product_full.html">Mixer</a></li>
                                                                <li><a href="sidebar_product_full.html">Microwave</a></li>
                                                                <li><a href="sidebar_product_full.html">Sponge</a></li>
                                                                <li><a href="sidebar_product_full.html">Paper Towel</a></li>
                                                                <li><a href="sidebar_product_full.html">Vacuum Cleaner</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="resp-slider-container">
                                                    <div class="slider responsive">
                                                        <div class="item product" id="product_sw_countdown_08">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star">
                                                                                <span style="width:35px"></span>
                                                                            </div>

                                                                            <div class="item-number-rating">2 Review(s)</div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="simple_product.html" title="veniam dolore">veniam dolore</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <del>
                                                                                $250.00
                                                                            </del>

                                                                            <ins>
                                                                                $190.00
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">-24%</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img 	width="300" height="300" src="images/1903/45-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="images/1903/45-300x300.jpg 300w, images/1903/45-150x150.jpg 150w, images/1903/45-180x180.jpg 180w, images/1903/45.jpg 600w"
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

                                                        <div class="item product" id="product_sw_countdown_09">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star">
                                                                                <span style="width:63px"></span>
                                                                            </div>

                                                                            <div class="item-number-rating">2 Review(s)</div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="simple_product.html" title="Cleaner with bag">Cleaner with bag</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <del>
                                                                                $390.00
                                                                            </del>

                                                                            <ins>
                                                                                $350.00
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">-10%</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img 	width="300" height="300" src="images/1903/22-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="images/1903/22-300x300.jpg 300w, images/1903/22-150x150.jpg 150w, images/1903/22-180x180.jpg 180w, images/1903/22.jpg 600w"
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

                                                        <div class="item product" id="product_sw_countdown_10">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star"></div>

                                                                            <div class="item-number-rating">0 Review(s)</div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="simple_product.html" title="philips stand">philips stand</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <del>
                                                                                $300.00
                                                                            </del>

                                                                            <ins>
                                                                                $250.00
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">-17%</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>
                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img 	width="300" height="300" src="images/1903/62-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="images/1903/62-300x300.jpg 300w, images/1903/62-150x150.jpg 150w, images/1903/62-180x180.jpg 180w, images/1903/62.jpg 600w"
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

                                                        <div class="item product" id="product_sw_countdown_11">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star">
                                                                                <span style="width:52.5px"></span>
                                                                            </div>

                                                                            <div class="item-number-rating">4 Review(s)</div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="simple_product.html" title="Vacuum cleaner">Vacuum cleaner</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <del>
                                                                                $350.00
                                                                            </del>

                                                                            <ins>
                                                                                $260.00
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">-26%</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img 	width="300" height="300" src="images/1903/26-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="images/1903/26-300x300.jpg 300w, images/1903/26-150x150.jpg 150w, images/1903/26-180x180.jpg 180w, images/1903/26.jpg 600w"
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

                                                        <div class="item product" id="product_sw_countdown_12">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star"></div>
                                                                            <div class="item-number-rating">0 Review(s)</div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="simple_product.html" title="nisi ball tip">Nisi ball tip</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <del>
                                                                                $460.00
                                                                            </del>

                                                                            <ins>
                                                                                $400.00
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">-13%</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img	width="300" height="300" src="images/1903/11-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="images/1903/11-300x300.jpg 300w, images/1903/11-150x150.jpg 150w, images/1903/11-180x180.jpg 180w, images/1903/11.jpg 600w"
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

                                                        <div class="item product" id="product_sw_countdown_13">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star"></div>
                                                                            <div class="item-number-rating">0 Review(s)</div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="simple_product.html" title="MacBook Air">MacBook Air</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <del>
                                                                                $800.00
                                                                            </del>

                                                                            <ins>
                                                                                $700.00
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">-13%</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img 	width="300" height="300" src="images/1903/50-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="images/1903/50-300x300.jpg 300w, images/1903/50-150x150.jpg 150w, images/1903/50-180x180.jpg 180w, images/1903/50.jpg 600w"
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_row vc_row-fluid margin-bottom-30">
                                <div class="vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center banner-none">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <a href="#" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                        <img class="vc_single_image-img" src="images/1903/bn3-1.jpg" width="370" height="180" alt="bn3-1" title="bn3-1">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <a href="#" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                        <img class="vc_single_image-img" src="images/1903/bn3-2.jpg" width="370" height="180" alt="bn3-2" title="bn3-2">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center banner-none">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <a href="#" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                        <img class="vc_single_image-img " src="images/1903/bn3-3.jpg" width="370" height="180" alt="bn3-3" title="bn3-3">
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
                                                        <h3>New Arrivals</h3>
                                                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#child_sw_woo_slider_02" aria-expanded="false">
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                    </div>

                                                    <div class="box-title-right clearfix">
                                                        <div class="view-all pull-left">
                                                            <a href="shop_right_sidebar.html">
                                                                See All<i class="fa fa-caret-right"></i>
                                                            </a>
                                                        </div>

                                                        <div class="childcat-content pull-right" id="child_sw_woo_slider_02">
                                                            <ul>
                                                                <li><a href="shop_right_sidebar.html">Blender</a></li>
                                                                <li><a href="shop_right_sidebar.html">Mixer</a></li>
                                                                <li><a href="shop_right_sidebar.html">Microwave</a></li>
                                                                <li><a href="shop_right_sidebar.html">Sponge</a></li>
                                                                <li><a href="shop_right_sidebar.html">Paper Towel</a></li>
                                                                <li><a href="shop_right_sidebar.html">Vacuum Cleaner</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="resp-slider-container">
                                                    <div class="slider responsive">
                                                        <div class="item product" id="product_sw_countdown_14">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star">
                                                                                <span style="width:35px"></span>
                                                                            </div>

                                                                            <div class="item-number-rating">2 Review(s)</div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="simple_product.html" title="veniam dolore">veniam dolore</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <del>
                                                                                $250.00
                                                                            </del>

                                                                            <ins>
                                                                                $190.00
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">-24%</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img 	width="300" height="300" src="images/1903/45-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="images/1903/45-300x300.jpg 300w, images/1903/45-150x150.jpg 150w, images/1903/45-180x180.jpg 180w, images/1903/45.jpg 600w"
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

                                                        <div class="item product" id="product_sw_countdown_15">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star">
                                                                                <span style="width:63px"></span>
                                                                            </div>

                                                                            <div class="item-number-rating">2 Review(s)</div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="simple_product.html" title="Cleaner with bag">Cleaner with bag</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <del>
                                                                                $390.00
                                                                            </del>

                                                                            <ins>
                                                                                $350.00
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">-10%</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img 	width="300" height="300" src="images/1903/22-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="images/1903/22-300x300.jpg 300w, images/1903/22-150x150.jpg 150w, images/1903/22-180x180.jpg 180w, images/1903/22.jpg 600w"
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

                                                        <div class="item product" id="product_sw_countdown_16">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star"></div>

                                                                            <div class="item-number-rating">0 Review(s)</div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="simple_product.html" title="philips stand">philips stand</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <del>
                                                                                $300.00
                                                                            </del>

                                                                            <ins>
                                                                                $250.00
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">-17%</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>
                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img 	width="300" height="300" src="images/1903/62-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="images/1903/62-300x300.jpg 300w, images/1903/62-150x150.jpg 150w, images/1903/62-180x180.jpg 180w, images/1903/62.jpg 600w"
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

                                                        <div class="item product" id="product_sw_countdown_17">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star">
                                                                                <span style="width:52.5px"></span>
                                                                            </div>

                                                                            <div class="item-number-rating">4 Review(s)</div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="simple_product.html" title="Vacuum cleaner">Vacuum cleaner</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <del>
                                                                                $350.00
                                                                            </del>

                                                                            <ins>
                                                                                $260.00
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">-26%</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img 	width="300" height="300" src="images/1903/26-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="images/1903/26-300x300.jpg 300w, images/1903/26-150x150.jpg 150w, images/1903/26-180x180.jpg 180w, images/1903/26.jpg 600w"
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

                                                        <div class="item product" id="product_sw_countdown_18">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star"></div>
                                                                            <div class="item-number-rating">0 Review(s)</div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="simple_product.html" title="nisi ball tip">Nisi ball tip</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <del>
                                                                                $460.00
                                                                            </del>

                                                                            <ins>
                                                                                $400.00
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">-13%</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img	width="300" height="300" src="images/1903/11-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="images/1903/11-300x300.jpg 300w, images/1903/11-150x150.jpg 150w, images/1903/11-180x180.jpg 180w, images/1903/11.jpg 600w"
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

                                                        <div class="item product" id="product_sw_countdown_19">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star"></div>
                                                                            <div class="item-number-rating">0 Review(s)</div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="simple_product.html" title="MacBook Air">MacBook Air</a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
                                                                            <del>
                                                                                $800.00
                                                                            </del>

                                                                            <ins>
                                                                                $700.00
                                                                            </ins>
                                                                        </div>

                                                                        <div class="sale-off">-13%</div>
                                                                    </div>

                                                                    <div class="item-img products-thumb">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="simple_product.html">
                                                                            <div class="product-thumb-hover">
                                                                                <img 	width="300" height="300" src="images/1903/50-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                                        srcset="images/1903/50-300x300.jpg 300w, images/1903/50-150x150.jpg 150w, images/1903/50-180x180.jpg 180w, images/1903/50.jpg 600w"
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_row vc_row-fluid margin-bottom-30">
                                <div class="vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center banner-none">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <a href="#" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                        <img class="vc_single_image-img" src="images/1903/bn3-4.jpg" width="270" height="180" alt="bn3-4" title="bn3-4">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center banner-none">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <a href="#" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                        <img class="vc_single_image-img" src="images/1903/bn3-5.jpg" width="270" height="180" alt="bn3-5" title="bn3-5">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center banner-none">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <a href="#" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                        <img class="vc_single_image-img" src="images/1903/bn3-6.jpg" width="270" height="180" alt="bn3-6" title="bn3-6">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center banner-none">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <a href="#" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                        <img class="vc_single_image-img" src="images/1903/bn3-7.jpg" width="270" height="180" alt="bn3-7" title="bn3-7">
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
                                            <div id="sw_brand_01" class="responsive-slider sw-brand-container-slider loading clearfix" data-lg="6" data-md="5" data-sm="4" data-xs="3" data-mobile="2" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
                                                <div class="title-home box-title">
                                                    <h3>HOT BRANDS</h3>
                                                </div>

                                                <div class="resp-slider-container">
                                                    <div class="slider responsive">
                                                        <div class="item item-brand-cat">
                                                            <div class="item-image">
                                                                <a href="#">
                                                                    <img width="173" height="88" src="images/1903/Brand_1.jpg" class="attachment-173x91 size-173x91" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="item-image">
                                                                <a href="#">
                                                                    <img width="173" height="88" src="images/1903/Brand_10.jpg" class="attachment-173x91 size-173x91" alt="">
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="item item-brand-cat">
                                                            <div class="item-image">
                                                                <a href="#">
                                                                    <img width="173" height="88" src="images/1903/Brand_1.jpg" class="attachment-173x91 size-173x91" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="item-image">
                                                                <a href="#">
                                                                    <img width="173" height="88" src="images/1903/Brand_2.jpg" class="attachment-173x91 size-173x91" alt="">
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="item item-brand-cat">
                                                            <div class="item-image">
                                                                <a href="#">
                                                                    <img width="173" height="88" src="images/1903/Brand_2.jpg" class="attachment-173x91 size-173x91" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="item-image">
                                                                <a href="#">
                                                                    <img width="173" height="88" src="images/1903/Brand_3.jpg" class="attachment-173x91 size-173x91" alt="">
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="item item-brand-cat">
                                                            <div class="item-image">
                                                                <a href="#">
                                                                    <img width="173" height="88" src="images/1903/Brand_4.jpg" class="attachment-173x91 size-173x91" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="item-image">
                                                                <a href="#">
                                                                    <img width="173" height="88" src="images/1903/Brand_5.jpg" class="attachment-173x91 size-173x91" alt="">
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="item item-brand-cat">
                                                            <div class="item-image">
                                                                <a href="#">
                                                                    <img width="173" height="88" src="images/1903/Brand_6.jpg" class="attachment-173x91 size-173x91" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="item-image">
                                                                <a href="#">
                                                                    <img width="173" height="88" src="images/1903/Brand_7.jpg" class="attachment-173x91 size-173x91" alt="">
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="item item-brand-cat">
                                                            <div class="item-image">
                                                                <a href="#">
                                                                    <img width="173" height="88" src="images/1903/Brand_8.jpg" class="attachment-173x91 size-173x91" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="item-image">
                                                                <a href="#">
                                                                    <img width="173" height="88" src="images/1903/Brand_9.jpg" class="attachment-173x91 size-173x91" alt="">
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

                            <div class="vc_row vc_row-fluid margin-bottom-30">
                                <div class="vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="clear"></div>

                                            <div id="sw_reponsive_post_slider_01" class="responsive-post-slider responsive-slider clearfix loading" data-lg="3" data-md="3" data-sm="2" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
                                                <div class="resp-slider-container">
                                                    <div class="box-title">
                                                        <h3>OUR LATEST BLOGS</h3>
                                                    </div>

                                                    <div class="slider responsive">
                                                        <div class="item widget-pformat-detail">
                                                            <div class="item-inner">
                                                                <div class="item-detail">
                                                                    <div class="img_over">
                                                                        <a href="post_format_image.html">
                                                                            <img 	width="870" height="495" src="images/1903/1-1.jpg" class="attachment-destino_blog-responsive1 size-destino_blog-responsive1 wp-post-image" alt=""
                                                                                    srcset="images/1903/1-1.jpg 870w, images/1903/1-1-300x170.jpg 300w, images/1903/1-1-370x210.jpg 370w, images/1903/1-1-768x437.jpg 768w"
                                                                                    sizes="(max-width: 870px) 100vw, 870px">
                                                                        </a>
                                                                    </div>

                                                                    <div class="entry-content">
                                                                        <div class="content-top">
                                                                            <div class="entry-meta clearfix">
                                                                                <div class="meta-entry entry-date">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="month-time">February</span>,
                                                                                    <span class="day-time">07</span>,
                                                                                    <span class="year-time">2017</span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="item-title">
                                                                                <h4>
                                                                                    <a href="post_format_image.html">whether it’s at a movie screening with a girly dress</a>
                                                                                </h4>
                                                                            </div>

                                                                            <div class="entry-meta clearfix">
                                                                                <div class="entry-comment meta-entry">
                                                                                    <a href="#">
                                                                                        <i class="fa fa-comments"></i>0  Comment
                                                                                    </a>
                                                                                </div>

                                                                                <div class="entry-meta-link entry-meta-tag meta-entry">
                                                                                    <i class="fa fa-tags"></i>
                                                                                    <a href="post_format_image.html" rel="tag">couple</a>,
                                                                                    <a href="post_format_image.html" rel="tag">Wedding</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="readmore">
                                                                            <a href="post_format_image.html" title="View more">
                                                                                <i class="fa fa-caret-right"></i>Read more
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item widget-pformat-detail">
                                                            <div class="item-inner">
                                                                <div class="item-detail">
                                                                    <div class="img_over">
                                                                        <a href="post_format_image.html">
                                                                            <img 	width="870" height="495" src="images/1903/2-1.jpg" class="attachment-destino_blog-responsive1 size-destino_blog-responsive1 wp-post-image" alt=""
                                                                                    srcset="images/1903/2-1.jpg 870w, images/1903/2-1-300x170.jpg 300w, images/1903/2-1-370x210.jpg 370w, images/1903/2-1-768x437.jpg 768w"
                                                                                    sizes="(max-width: 870px) 100vw, 870px">
                                                                        </a>
                                                                    </div>

                                                                    <div class="entry-content">
                                                                        <div class="content-top">
                                                                            <div class="entry-meta clearfix">
                                                                                <div class="meta-entry entry-date">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="month-time">February</span>,
                                                                                    <span class="day-time">07</span>,
                                                                                    <span class="year-time">2017</span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="item-title">
                                                                                <h4>
                                                                                    <a href="post_format_image.html">although it’s quite clear that she prefers to be comfortable in her</a>
                                                                                </h4>
                                                                            </div>

                                                                            <div class="entry-meta clearfix">
                                                                                <div class="entry-comment meta-entry">
                                                                                    <a href="#"><i class="fa fa-comments"></i>0  Comment</a>
                                                                                </div>

                                                                                <div class="entry-meta-link entry-meta-tag meta-entry">
                                                                                    <i class="fa fa-tags"></i>
                                                                                    <a href="post_format_image.html" rel="tag">camera</a>,
                                                                                    <a href="post_format_image.html" rel="tag">Wedding</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="readmore">
                                                                            <a href="post_format_image.html" title="View more">
                                                                                <i class="fa fa-caret-right"></i>Read more
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item widget-pformat-detail">
                                                            <div class="item-inner">
                                                                <div class="item-detail">
                                                                    <div class="img_over">
                                                                        <a href="post_format_image.html">
                                                                            <img	width="870" height="495" src="images/1903/3-1.jpg" class="attachment-destino_blog-responsive1 size-destino_blog-responsive1 wp-post-image" alt=""
                                                                                    srcset="images/1903/3-1.jpg 870w, images/1903/3-1-300x170.jpg 300w, images/1903/3-1-370x210.jpg 370w, images/1903/3-1-768x437.jpg 768w"
                                                                                    sizes="(max-width: 870px) 100vw, 870px">
                                                                        </a>
                                                                    </div>

                                                                    <div class="entry-content">
                                                                        <div class="content-top">
                                                                            <div class="entry-meta clearfix">
                                                                                <div class="meta-entry entry-date">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="month-time">February</span>,
                                                                                    <span class="day-time">07</span>,
                                                                                    <span class="year-time">2017</span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="item-title">
                                                                                <h4>
                                                                                    <a href="post_format_image.html">Alia is clearly unafraid to experiment with her fashion</a>
                                                                                </h4>
                                                                            </div>

                                                                            <div class="entry-meta clearfix">
                                                                                <div class="entry-comment meta-entry">
                                                                                    <a href="#">
                                                                                        <i class="fa fa-comments"></i>0  Comment
                                                                                    </a>
                                                                                </div>

                                                                                <div class="entry-meta-link entry-meta-tag meta-entry">
                                                                                    <i class="fa fa-tags"></i>
                                                                                    <a href="post_format_image.html" rel="tag">camera</a>,
                                                                                    <a href="post_format_image.html" rel="tag">Wedding</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="readmore">
                                                                            <a href="post_format_image.html" title="View more">
                                                                                <i class="fa fa-caret-right"></i>Read more
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item widget-pformat-detail">
                                                            <div class="item-inner">
                                                                <div class="item-detail">
                                                                    <div class="img_over">
                                                                        <a href="post_format_image.html">
                                                                            <img 	width="870" height="495" src="images/1903/5-1.jpg" class="attachment-destino_blog-responsive1 size-destino_blog-responsive1 wp-post-image" alt=""
                                                                                    srcset="images/1903/5-1.jpg 870w, images/1903/5-1-300x170.jpg 300w, images/1903/5-1-370x210.jpg 370w, images/1903/5-1-768x437.jpg 768w"
                                                                                    sizes="(max-width: 870px) 100vw, 870px">
                                                                        </a>
                                                                    </div>

                                                                    <div class="entry-content">
                                                                        <div class="content-top">
                                                                            <div class="entry-meta clearfix">
                                                                                <div class="meta-entry entry-date">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="month-time">February</span>,
                                                                                    <span class="day-time">07</span>,
                                                                                    <span class="year-time">2017</span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="item-title">
                                                                                <h4>
                                                                                    <a href="post_format_image.html">Donec massa pellentesque placerat nisl laoreet placerat nisl</a>
                                                                                </h4>
                                                                            </div>

                                                                            <div class="entry-meta clearfix">
                                                                                <div class="entry-comment meta-entry">
                                                                                    <a href="#">
                                                                                        <i class="fa fa-comments"></i>0  Comment
                                                                                    </a>
                                                                                </div>

                                                                                <div class="entry-meta-link entry-meta-tag meta-entry">
                                                                                    <i class="fa fa-tags"></i>
                                                                                    <a href="post_format_image.html" rel="tag">camera</a>,
                                                                                    <a href="post_format_image.html" rel="tag">Wedding</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="readmore">
                                                                            <a href="post_format_image.html" title="View more">
                                                                                <i class="fa fa-caret-right"></i>Read more
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


