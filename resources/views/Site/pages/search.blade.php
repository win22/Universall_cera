@extends('Site.body.layout')
@section('content')
<div class="archive post-type-archive woocommerce post-type-archive-product has-left-sidebar has-left-product-sidebar">
    <div class="body-wrapper theme-clearfix">
        <div class="listings-title">
            <div class="container">
                <div class="wrap-title">
                    <h1>Résultat de votre recherche  </h1>

                    <div class="bread">
                        <div class="breadcrumbs theme-clearfix">
                            <div class="container">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div id="contents" class="content col-lg-9 col-md-8 col-sm-8" role="main">

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

                    <div id="container">
                        <div id="content" role="main">
                            <!--  Shop Title -->
                            <div class="products-wrapper">




                                <div class="clear"></div>

                                <ul class="products-loop row grid clearfix">
                                    @foreach($result as $all)
                                    <li class="item col-lg-3 col-md-3 col-sm-6 col-xs-6 post-255 product type-product status-publish has-post-thumbnail product_cat-electronics product_cat-home-appliances product_cat-vacuum-cleaner product_brand-apoteket first instock sale featured shipping-taxable purchasable product-type-simple">
                                        <div class="products-entry item-wrap clearfix">
                                            <div class="item-detail">
                                                <div class="item-img products-thumb">
                                                    <a href="{{ route('details', $all->id) }}">
                                                        <div class="product-thumb-hover">
                                                            <img  style="width: 160px !important; height: 150px ! important"	width="300" height="100" src="{{ URL::to(asset($all->image)) }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                  srcset="{{ URL::to(asset($all->image)) }} 100w, {{ URL::to(asset($all->image)) }} 150w, {{ URL::to(asset($all->image)) }} 180w,{{ URL::to(asset($all->image)) }} 600w"
                                                                  sizes="(max-width: 300px) 100vw, 300px" />
                                                        </div>
                                                    </a>

                                                    <!-- add to cart, wishlist, compare -->
                                                    <div class="item-bottom clearfix">
                                                        <a class="btn btn-warning" href="{{ route('details', $all->id) }}">Voir les détails</a>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>

                                                <div class="item-content products-content">
                                                    <div class="reviews-content">
                                                        <span>Produit de type céramique</span>
                                                    </div>

                                                    <h4><a href="{{ route('details', $all->id) }}" title="Cleaner with bag">{{ $all->model }}</a></h4>

                                                    <span style="color: tomato" class="item-price">
                                                        <span   class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{ $all->prix }}</span> FCFA <ins></span>

                                                </div>
                                            </div>
                                    </li>
                                    @endforeach
                                </ul>

                                <div class="clear"></div>

                                <div class="products-nav clearfix">
                                    <div class="view-mode-wrap pull-left clearfix">
                                        <div class="view-mode">
                                            <a href="javascript:void(0)" class="grid-view active" title="Grid view"><span>Grid view</span></a>
                                            <a href="javascript:void(0)" class="list-view" title="List view"><span>List view</span></a>
                                        </div>
                                    </div>



                                    <nav class="woocommerce-pagination pull-right">
                                        <span class="note"> {{ $result->links() }} </span>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <aside id="left" class="sidebar col-lg-3 col-md-4 col-sm-4">
                    <div class="widget-1 widget-first widget woocommerce_product_categories-3 woocommerce widget_product_categories">
                        <div class="widget-inner">
                            <div class="block-title-widget">
                                <h2><span>Categories</span></h2>
                            </div>

                            <ul class="product-categories">
                                <li class="cat-item"><a href="shop.html">Sol</a> <span class="count">(2)</span></li>
                                <li class="cat-item"><a href="shop.html">Faiences</a> <span class="count">(1)</span></li>
                                <li class="cat-item"><a href="shop.html">Salle de bain</a> <span class="count">(2)</span></li>
                                <li class="cat-item"><a href="shop.html">Sanitaire</a> <span class="count">(0)</span></li>
                                <li class="cat-item"><a href="shop.html">Lavabo</a> <span class="count">(6)</span></li>
                                <li class="cat-item"><a href="shop.html">Décoration</a> <span class="count">(1)</span></li>
                                <li class="cat-item"><a href="shop.html">Faiences cuisines</a> <span class="count">(2)</span></li>
                                <li class="cat-item"><a href="shop.html">Faiences Salle de bain</a> <span class="count">(3)</span></li>
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

                                            <h4><a href="{{ route('details', $solc->id) }}" title="corned beef enim">{{ $solc->model }}</a></h4>

                                            <div style="color: orange" class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{ $solc->prix }} FCFA</span></div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="widget-6 widget-last widget text-6 widget_text">
                        <div class="widget-inner">
                            <div class="textwidget">
                                <div class="banner-sidebar">
                                    <img src="{{ asset('site/images/1903/banner-detail.jpg') }}" title="banner" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection
