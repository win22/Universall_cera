@extends('Site.body.layout')
@section('content')
<div class="product-template-default single single-product woocommerce woocommerce-page">
    <div class="body-wrapper theme-clearfix">
        <div class="listings-title">
            <div class="container">
                <div class="wrap-title">
                    <h1>Détail d'un produit</h1>
                    <div class="bread">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div id="contents-detail" class="content col-lg-12 col-md-12 col-sm-12" role="main">
                    <div id="container">
                        <div id="content" role="main">
                            <div class="single-product clearfix">
                                <div id="product-01"
                                     class="post-01 product type-product status-publish has-post-thumbnail product_cat-batteries-chargers product_cat-cameras-camcorders product_cat-mp3-player-accessories product_cat-television-cameras-accessories first instock shipping-taxable purchasable product-type-variable has-default-attributes has-children">
                                    <div class="product_detail row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">
                                            <div class="slider_img_productd">
                                                <!-- woocommerce_show_product_images -->
                                                <div id="product_img_01" class="product-images loading"
                                                     data-rtl="false">
                                                    <div class="product-images-container clearfix thumbnail-bottom">
                                                        <!-- Image Slider -->
                                                        <div class="slider product-responsive">
                                                            <div class="item-img-slider">
                                                                <div class="images">
                                                                    <a href="{{ URL::to(asset($produit->image)) }}"
                                                                       data-rel="prettyPhoto[product-gallery]"
                                                                       class="zoom">
                                                                        <img style="width: 300px; height: 300px"
                                                                             width="600" height="600"
                                                                             src="{{ URL::to(asset($produit->image)) }}"
                                                                             class="attachment-shop_single size-shop_single"
                                                                             alt=""
                                                                             srcset="{{ URL::to(asset($produit->image)) }} 600w, {{ URL::to(asset($produit->image)) }} 150w, {{ URL::to(asset($produit->image)) }} 300w, {{ URL::to(asset($produit->image)) }} 180w"
                                                                             sizes="(max-width: 600px) 100vw, 600px">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">
                                            <div class="content_product_detail">
                                                <h1 itemprop="name" class="product_title entry-title">{{ $produit->model
                                                    }}</h1>

                                                <div class="reviews-content">
                                                    <a href="#reviews" class="woocommerce-review-link" rel="nofollow">
                                                        Produit de type céramique </a>
                                                </div>

                                                <div>
                                                    <p style="color: tomato" class="price"><span
                                                            class="woocommerce-Price-amount amount">{{ $produit->prix }} FCFA</span>
                                                    </p>
                                                </div>

                                                <div class="product-info clearfix">
                                                    <div style="color: #00dd55"
                                                         class="product-stock pull-left in-stock">
                                                        <span>En stock</span>
                                                    </div>
                                                </div>

                                                <div class="description" itemprop="description">
                                                    <p>Taille : {{ $produit->taille }} </p>
                                                </div>

                                                <form class="variations_form cart" method="post"
                                                      enctype="multipart/form-data">
                                                    <div class="addcart-wrapper clearfix">
                                                        <div class="single_variation_wrap">
                                                            <div class="woocommerce-variation single_variation"></div>

                                                            <div
                                                                class="woocommerce-variation-add-to-cart variations_button">
                                                                <a href="externalaffiliate_product.html"
                                                                   class="single_add_to_cart_button button alt external">Commander</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="social-share">
                                                    <div class="title-share">Retrouvez se produit sur </div>
                                                    <div class="wrap-content">
                                                        <a href="http://www.facebook.com"
                                                           onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i
                                                                class="fa fa-facebook"></i></a>
                                                        <a href="http://twitter.com"
                                                           onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i
                                                                class="fa fa-twitter"></i></a>
                                                        <a href="https://plus.google.com"
                                                           onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i
                                                                class="fa fa-google-plus"></i></a>
                                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tabs clearfix">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs">
                                            <li class="description_tab active">
                                                <a href="#tab-description" data-toggle="tab">Description</a>
                                            </li>

                                        </ul>

                                        <div class="clear"></div>

                                        <div class=" tab-content">
                                            <div class="tab-pane active" id="tab-description">
                                                <h2>Product Description</h2>
                                                <p>{{ $produit->description }}</p>
                                            </div>

                                            <div class="tab-pane" id="tab-reviews">
                                                <div id="reviews">
                                                    <div id="comments">
                                                        <h2>Reviews</h2>
                                                        <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                                    </div>

                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">
                                                                <h3 id="reply-title" class="comment-reply-title">Be the
                                                                    first to review "External/Affiliate Product"
                                                                    <small><a rel="nofollow"
                                                                              id="cancel-comment-reply-link" href=""
                                                                              style="display:none;">Cancel
                                                                            reply</a></small>
                                                                </h3>

                                                                <form action="" method="post" id="commentform"
                                                                      class="comment-form">
                                                                    <p class="comment-form-rating">
                                                                        <label for="rating">Your Rating</label>
                                                                        <select name="rating" id="rating">
                                                                            <option value="">Rate ...</option>
                                                                            <option value="5">Perfect</option>
                                                                            <option value="4">Good</option>
                                                                            <option value="3">Average</option>
                                                                            <option value="2">Not that bad</option>
                                                                            <option value="1">Very Poor</option>
                                                                        </select>
                                                                    </p>

                                                                    <p class="comment-form-comment">
                                                                        <label for="comment">Your Review</label>
                                                                        <textarea id="comment" name="comment" cols="45"
                                                                                  rows="8"
                                                                                  aria-required="true"></textarea>
                                                                    </p>

                                                                    <p class="form-submit">
                                                                        <input name="submit" type="submit" id="submit"
                                                                               class="submit" value="Submit">
                                                                    </p>
                                                                </form>
                                                            </div>
                                                            <!-- #respond -->
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-single-product theme-clearfix">
                                    <div
                                        class="widget-1 widget-first widget sw_related_upsell_widget-2 sw_related_upsell_widget"
                                        data-scroll-reveal="enter bottom move 20px wait 0.2s">
                                        <div class="widget-inner"></div>
                                    </div>

                                    <div
                                        class="widget-2 widget-last widget sw_related_upsell_widget-3 sw_related_upsell_widget"
                                        data-scroll-reveal="enter bottom move 20px wait 0.2s">
                                        <div class="widget-inner">
                                            <div id="sliderup_sw_related_upsell_widget-3"
                                                 class="sw-woo-container-slider upsells-products responsive-slider clearfix loading"
                                                 data-lg="4" data-md="3" data-sm="2" data-xs="2" data-mobile="1"
                                                 data-speed="1000" data-scroll="1" data-interval="5000"
                                                 data-autoplay="false">
                                                <div class="resp-slider-container">
                                                    <div class="box-slider-title">
                                                        <h2><span>Autres produits</span></h2>
                                                    </div>

                                                    <div class="slider responsive">
                                                        @foreach($all_produit as $all_p)
                                                        <div class="item ">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-img products-thumb">
                                                                        <a href="{{ route('details', $all_p->id) }}">
                                                                            <div class="product-thumb-hover">
                                                                                <img style="width: 130px; height: 130px"
                                                                                     src="{{ URL::to(asset($all_p->image)) }}"
                                                                                     class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                     alt=""
                                                                                     srcset="{{ URL::to(asset($all_p->image)) }} 300w, {{ URL::to(asset($all_p->image)) }} 150w, {{ URL::to(asset($all_p->image)) }} 180w, {{ URL::to(asset($all_p->image)) }} 600w"
                                                                                     sizes="(max-width: 300px) 100vw, 300px">
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="item-number-rating">
                                                                                Produit de type ceramique
                                                                            </div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4><a href="{{ route('details', $all_p->id) }}"
                                                                               title="turkey qui">{{ $all_p->model }}</a></h4>

                                                                        <!-- price -->
                                                                        <div style="color: tomato" class="item-price">
                                                                            {{ $all_p->prix }} FCFA
                                                                            </span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
