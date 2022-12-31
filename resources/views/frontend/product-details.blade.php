@extends('frontend.layouts.master')
@section('title', $singleProduct->product_name_en )
@section('content')
<div class="row">

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Product Details Information</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class='row single-product'>

        <!-- ============================================== SIDEBAR Categories Start ============================================== -->
        <div class="col-xs-12 col-sm-12 col-md-2 sidebar">


        </div><!-- /.sidemenu-holder Col-md-3 -->
        <!-- ============================================== SIDEBAR Categories Start  ============================================== -->
        <div class='col-md-10'>
            <div class="detail-block">
                <div class="row  wow fadeInUp">

                    <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                        <div class="product-item-holder size-big single-product-gallery small-gallery">

                            <div id="owl-single-product">
                                <div class="single-product-gallery-item" id="slide1">
                                    <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p8.jpg">
                                        <img class="img-responsive" alt="" src="{{ asset($singleProduct->product_thumbnail) }}" data-echo="{{ asset($singleProduct->product_thumbnail) }}" />
                                    </a>
                                </div><!-- /.single-product-gallery-item -->
                            </div><!-- /.single-product-slider -->

                            <div class="single-product-gallery-thumbs gallery-thumbs">
                                <div id="owl-single-product-thumbnails">

                                </div><!-- /#owl-single-product-thumbnails -->
                            </div><!-- /.gallery-thumbs -->

                        </div><!-- /.single-product-gallery -->
                    </div><!-- /.gallery-holder -->
                    <div class='col-sm-6 col-md-7 product-info-block'>
                        <div class="product-info">
                            <h1 class="name" id="pName"> {{ $singleProduct->product_name_en }} </h1>
                            <div class="rating-reviews m-t-20">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="rating rateit-small"></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="reviews">
                                            <a href="#" class="lnk">(13 Reviews)</a>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.rating-reviews -->



                            <div class="stock-container info-container m-t-10">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="stock-box">
                                            <span class="label">Availability:</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="stock-box">
                                            <input type="hidden" name="" id="product_id" value="{{$singleProduct->product_id}}">
                                            <span class="value" style="color: green" id="color">In Stock</span>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.stock-container -->

                            <div class="description-container m-t-20">
                                {!! $singleProduct->short_descp_en !!}
                            </div><!-- /.description-container -->

                            <div class="price-container info-container m-t-20">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="price-box">

                                            @if ($singleProduct->discount_price == null)
                                            <span class="price" id="price"> {{ $singleProduct->actual_price}}
                                            </span>
                                            @else
                                            <span class="price" id="price">{{ $singleProduct->actual_price }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="favorite-button m-t-10">
                                            <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                title="Wishlist" href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                            <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                title="Add to Compare" href="#">
                                                <i class="fa fa-signal"></i>
                                            </a>
                                            <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                title="E-mail" href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div><!-- /.row -->
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <label for="product_color">Product Color:</label>
                                        <select class="form-control" name="product_color">
                                            <option value="" selected> Select One </option>
                                            @foreach ($colorWiseProducts as $color)
                                            <option value="{{ $color->color_id }}"> {{ $color->Color->color_name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product_size">Product Size:</label>
                                        <select class="form-control" id="product_size">
                                            <option value="" selected> Select One </option>
                                            @foreach ($sizeWiseProducts as $size)
                                            <option value="{{ $size->product_id }}"> {{ $size->Size->size_name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.price-container -->

                            <div class="quantity-container info-container">
                                <div class="row">

                                    @if ($singleProduct->product_qty == 0)

                                    @else
                                        <div class="col-sm-2">
                                            <span class="label">Qty :</span>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                        <div class="arrow plus gradient"><span class="ir"><i
                                                                    class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow minus gradient"><span class="ir"><i
                                                                    class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input type="text" value="1" min="1" id="pQty">
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <input type="hidden" name="product_id" id="product_id" value="{{$singleProduct->product_id}}">

                                    @if ($singleProduct->product_qty == 0)

                                    @else
                                        <div class="col-sm-7">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART
                                            </button>
                                        </div>
                                    @endif

                                </div><!-- /.row -->
                            </div><!-- /.quantity-container -->

                        </div><!-- /.product-info -->
                    </div><!-- /.col-sm-7 -->
                </div><!-- /.row -->
            </div>

            <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                <div class="row">
                    <div class="col-sm-3">
                        <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                            <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                        </ul><!-- /.nav-tabs #product-tabs -->
                    </div>
                    <div class="col-sm-9">

                        <div class="tab-content">

                            <div id="description" class="tab-pane in active">
                                <div class="product-tab">
                                    <p class="text">
                                        {!! $singleProduct->long_descp_en !!}
                                    </p>
                                </div>
                            </div><!-- /.tab-pane -->

                        </div><!-- /.tab-content -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.product-tabs -->

            <!-- ============================================== UPSELL PRODUCTS ============================================== -->
            <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">Related products</h3>
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

                    @foreach ($relatedProducts as $product)
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
                                                    {{ $product->discount_price + $product->actual_price}}
                                                 </span>
                                            @endif
                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">
                                                       Add to cart
                                                    </button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="#" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

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
            <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

        </div><!-- /.sidemenu-holder Col-md-9 -->
        <div class="clearfix"></div>
    </div><!-- /.row -->


    <br><br><br>
</div><!-- /.row -->
@endsection
@section('scripts')

<script>
    $("select[name='product_color']").on('change', function (event) {
   var color = $(this).val();
   var product= $('#product_id').val();

   /* ==== ajax request ==== */
   if (color) {
       $.ajax({
           url: "{{ url('color-wise/product-status/') }}/" + color,
           type: "GET",
           dataType: "json",
           data:{
            id:product
           },
           success: function (response) {
            // console.log(response);
            $('#color').html(response.stock_status);
            $('#price').html(response.price);
           }
       });
   }
   /* ==== ajax request ==== */
});
</script>

@endsection
