@extends('Site.body.layout')
@section('content')
<p hidden class="alert ">{{ $message = Session::get('message')}}</p>
@if($message)
<div id="alert" style="padding-top: 10px!important; background-color: #ffaa00 ; color: white !important" class="alert  alert-with-icon small right ml-5">
    <i class="fa fa-bell" data-notify="icon"></i>
    </button>
    <span class="text-center data-notify="message"> {{$message }} </span>
</div>
{{ Session::put('message',NULL) }}
@endif
<div class="product-template-default single single-product woocommerce woocommerce-page">
    <div class="body-wrapper theme-clearfix">
        <div class="listings-title">
            <div class="container">
                <div  class="wrap-title">
                    <h1 class="reveal-2">Détail du {{ $produit->model }}</h1>
                    <div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <aside id="left" class="sidebar col-lg-3 col-md-4 col-sm-4 reveal-2">
                    <div class="widget-1 widget-first widget woocommerce_product_categories-3 woocommerce widget_product_categories">
                        <div  class="widget-inner">
                            <div   class="block-title-widget">
                                <h2><span>Categories</span></h2>
                            </div>

                            <ul class="product-categories">
                                <li class="cat-item"><a href="{{ route('category', 3) }}">Sol

                                    </a>   <span class="menu-color" data-color="#7ac143"></span> </li>
                                <li class="cat-item"><a href="{{ route('category', 7) }}">Faiences</a> </li>
                                <li class="cat-item"><a href="{{ route('category', 10) }}">Salle de bain</a> </li>
                                <li class="cat-item"><a href="{{ route('category', 12) }}">Sanitaire</a> </li>
                                <li class="cat-item"><a href="{{ route('category', 14) }}">Lavabo</a> </li>
                                <li class="cat-item"><a href="{{ route('category', 11) }}">Décoration</a> </li>
                                <li class="cat-item"><a href="{{ route('category', 9) }}">Faiences cuisines</a> </li>
                                <li class="cat-item"><a href="{{ route('category', 10) }}">Faiences Salle de bain</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="widget-5 widget etrostore_best_seller_product-3 etrostore_best_seller_product">
                        <div class="widget-inner">
                            <div class="block-title-widget">
                                <h2><span>Les plus demandé</span></h2>
                            </div>

                            <div id="best-seller-01" class="sw-best-seller-product">
                                <ul class="list-unstyled">
                                    @foreach($sol_footer as $solc)
                                    <li class="clearfix">
                                        <div class="item-img">
                                            <a href="{{ route('details', $solc->id) }}" title="corned beef enim">
                                                <img style="width: 60px; height: 70px"	width="180" height="180" src="{{ URL::to(asset($solc->image)) }}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                                     srcset="{{ URL::to(asset($solc->image)) }} 180w, {{ URL::to(asset($solc->image)) }} 150w, {{ URL::to(asset($solc->image)) }} 300w, {{ URL::to(asset($solc->image)) }} 600w"
                                                     sizes="(max-width: 180px) 50vw, 180px" />
                                            </a>
                                        </div>

                                        <div class="item-content">
                                            <div class="reviews-content">

                                                <div class="item-number-rating">
                                                    Produit de type cermaique
                                                </div>
                                            </div>

                                            <h4><a style="color: #08beff !important;" href="{{ route('details', $solc->id) }}" title="corned beef enim">{{ $solc->model }}</a></h4>

                                            <div style="color: tomato" class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{ $solc->prix }} FCFA</span></div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </aside>
                <div id="contents" class="content col-lg-9 col-md-8 col-sm-8 reveal-3" role="main">
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
                                                    <h1 style="color: #08beff" itemprop="name" class="product_title entry-title">{{ $produit->model
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

                                                                <div class="woocommerce-variation-add-to-cart variations_button">
                                                                    <a  href="externalaffiliate_product.html" data-toggle="modal" data-target="#exampleModal"
                                                                       class="single_add_to_cart_button button alt external">Commander</a>
                                                                </div><br/>

                                                            </div>

                                                        </div>
                                                    </form>
                                                    @if($errors->has('name') || $errors->has('email') || $errors->has('adresse') || $errors->has('phone') || $errors->has('quantite') || $errors->has('g-recaptcha-response') )
                                                    <p  style="color: tomato ! important" id="emailHelp" class="form-text">
                                                      <i class="fa fa-warning"></i>  Désolez,vous n'avez pas correctement remplit votre formulaire <br>
                                                         Veuillez réessayer s'il vous plait.
                                                    </p>
                                                    @endif
                                                    <div class="social-share">
                                                        <div class="title-share">Retrouvez se produit sur </div>
                                                        <div class="wrap-content">
                                                            <a href="http://www.facebook.com"
                                                               onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i
                                                                    class="fa fa-facebook"></i></a>
                                                            <a href="http://twitter.com"
                                                               onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i
                                                                    class="fa fa-twitter"></i></a>
<!--                                                            <a href="https://plus.google.com"-->
<!--                                                               onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i-->
<!--                                                                    class="fa fa-google-plus"></i></a>-->
<!--                                                            <a href="#"><i class="fa fa-dribbble"></i></a>-->
<!--                                                            <a href="#"><i class="fa fa-instagram"></i></a>-->
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
                                                    <a href="#tab-description" style="background-color: #00afff; data-toggle="tab">Description</a>
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
                                                            @foreach($all_product as $all_p)
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

                                                                            <h4><a style="color: #0b85ea" href="{{ route('details', $all_p->id) }}"
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
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-xl " role="document">
        <div class="modal-content card-orange card-outline">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <img style="width: 65px; height: 55px; padding-right: 15px" class="pull-right" src="{{ URL::to(asset($produit->image)) }}">
                <h5 style="color: #ffd600" class="modal-title" id="exampleModalLabel">Commande </h5>
                <p>Nom du produit : <span style="color: #00dd55"> {{ $produit->model }}</span> </p>

            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{ route('comvalide')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h6 class="">Nom <span class="text-orange">*</span></h6>
                            <input value="{{ old('name') }}" required type="text" name="name" class="form-control" placeholder="Saisir ici...">

                            @if($errors->has('name'))
                            <small id="emailHelp" class="form-text text-danger">{{$errors->first('name')}}</small>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <h6 class="">Adresse e-mail <span class="text-orange">*</span></h6>
                            <input required value="{{ old('email') }}"  type="email" name="email" class="form-control" placeholder="Saisir ici...">

                            @if($errors->has('email'))
                            <small id="emailHelp" class="form-text text-danger">{{$errors->first('email')}}</small>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h6 class="">Adresse <span class="text-orange">*</span></h6>
                            <input value="{{ old('adresse') }}"  required type="text" name="adresse" class="form-control"
                                   placeholder="Saisir ici...">

                            @if($errors->has('adresse'))
                            <small id="emailHelp" class="form-text text-danger">{{$errors->first('adresse')}}</small>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <h6 class="">Phonne <span class="text-orange">*</span></h6>
                            <input value="{{ old('phone') }}"  required type="text" name="phone" class="form-control"
                                   placeholder="Saisir ici...">

                            @if($errors->has('phone'))
                            <small id="emailHelp" class="form-text text-danger">{{$errors->first('phone')}}</small>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h6 class="">Quantité <span class="text-orange">*</span></h6>
                            <select required class="form-control" name="quantite">
                                <option value="">Selectionnez une quantité</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                            </select>
                            @if($errors->has('quantite'))
                            <small id="emailHelp" class="form-text text-danger">{{$errors->first('quantite')}}</small>
                            @endif
                            <input hidden type="text" name="product_id" value="{{ $produit->id }}">
                            <input hidden type="text" name="prix_product" value="{{ $produit->prix }}">
                            <input hidden type="text" name="product_image" value="{{ $produit->image }}">
                            <input hidden type="text" name="product_name" value="{{ $produit->model }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                            @if($errors->has('g-recaptcha-response'))
                            <span>
                                 <strong style="color: red">{{ $errors->first('g-recaptcha-response')}}</strong>
                           </span>
                            @endif
                            <p hidden class="alert ">{{ $message = Session::get('message')}}</p>
                            <br/>
                            @if($message)
                            <p style="color: #1a741a; font-family: 'Manjari Regular'" class="data-notify=" message"> {{$message }} <br/>
                            </p>
                            {{ Session::put('message',NULL) }}
                            @endif
                        </div>
                    </div>
                    <div class="row">

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i> Valider</button>
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-close"></i> Annuler</button>
                    </div>
                </form>


            </div>

        </div>
    </div>
</div>
@endsection
