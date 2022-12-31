@extends('frontend.layouts.master')
    @section('title', ' Laravel Task')
@section('content')
<div class="row">

            <!-- ============================================== SIDEBAR PART Start ============================================== -->
    <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

    </div><!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR  Start  ============================================== -->

    <!-- ============================================== CONTENT ============================================== -->
    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
        <!-- ========================================== SECTION – Banner ========================================= -->

        {{-- <div id="hero">
            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                <div class="item" style="background-image: url({{ asset('frontend/assets/images/sliders/01.jpg') }});">
                    <div class="container-fluid">
                        <div class="caption bg-color vertical-center text-left">
                            <div class="slider-header fadeInDown-1">Top Brands</div>
                            <div class="big-text fadeInDown-1">
                                New Collections
                            </div>

                            <div class="excerpt fadeInDown-2 hidden-xs">

                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

                            </div>
                            <div class="button-holder fadeInDown-3">
                                <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                            </div>
                        </div><!-- /.caption -->
                    </div><!-- /.container-fluid -->
                </div><!-- /.item -->

                <div class="item" style="background-image: url({{ asset('frontend/assets/images/sliders/02.jpg') }});">
                    <div class="container-fluid">
                        <div class="caption bg-color vertical-center text-left">
                         <div class="slider-header fadeInDown-1">Spring 2016</div>
                            <div class="big-text fadeInDown-1">
                                Women <span class="highlight">Fashion</span>
                            </div>

                            <div class="excerpt fadeInDown-2 hidden-xs">

                            <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span>

                            </div>
                            <div class="button-holder fadeInDown-3">
                                <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                            </div>
                        </div><!-- /.caption -->
                    </div><!-- /.container-fluid -->
                </div><!-- /.item -->



            </div><!-- /.owl-carousel -->
        </div> --}}
        <!-- ========================================= SECTION – Banner : END ========================================= -->

        <!-- ============================================== All PRODUCTS START ============================================== -->
        <section class="section featured-product wow fadeInUp">
                <h3 class="section-title">All products</h3>
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

                @foreach ($featureds as $product)
                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image">
                                        <a href=" {{ url('single-prduct/details/'. $product->product_id . '/' . $product->product_slug_en) }} ">
                                            <img src=" {{ asset($product->product_thumbnail) }}" alt="">
                                        </a>
                                    </div><!-- /.image -->

                                        <div class="tag hot"><span>Hot</span></div>

                                </div><!-- /.product-image -->

                                <div class="product-info text-left">
                                        <h3 class="name"><a href=" {{ url('single-prduct/details/'. $product->product_id . '/' . $product->product_slug_en) }} "> {{ $product->product_name_en }} </a></h3>

                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price">
                                        @if ($product->discount_price == null)
                                            <span class="price">
                                                {{ $product->actual_price}}
                                             </span>
                                        @else
                                            <span class="price">
                                                {{ $product->actual_price }}
                                            </span>
                                            <span class="price-before-discount">
                                                {{ $product->actual_price + $product->discount_price }}
                                             </span>
                                        @endif
                                    </div><!-- /.product-price -->

                                </div><!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" type="button" data-toggle="modal" data-target="#cartModal"
                                                 id="{{ $product->product_id }}" onclick="productView(this.id)">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <button class="btn btn-primary cart-btn"  data-toggle="tooltip"  type="button" title="Add Cart">
                                                     Add to cart
                                                </button>

                                            </li>
                                            {{-- Wishlist button --}}
                                            <button class="btn btn-primary icon" type="button" class="add-to-cart" title="Wishlist"
                                             id="{{ $product->product_id }}" onclick="addToWishlist(this.id)">
                                                 <i class="icon fa fa-heart"></i>
                                            </button>

                                            <li class="lnk">
                                                <a class="add-to-cart" href="#" title="Compare">
                                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /.action -->
                                </div><!-- /.cart -->
                            </div><!-- /.product -->
                        </div><!-- /.products -->
                    </div><!-- /.item -->
                @endforeach

            </div><!-- /.home-owl-carousel -->
        </section><!-- /.section -->
        <!-- ============================================== All PRODUCTS : END ============================================== -->

    </div><!-- /.homebanner-holder -->
    <!-- ============================================== CONTENT : END ============================================== -->
</div><!-- /.row -->
@endsection
