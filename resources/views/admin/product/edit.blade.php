@extends('admin.layouts.master')
@section('title', 'Product')
@section('products')
active show-sub
@endsection
@section('manage-products')
active
@endsection
@section('content')
{{-- Breadcrumb part start --}}
<nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active">Dashboard</span>
    <a class="breadcrumb-item" href="">Product Data Edit</a>
</nav>
{{-- Breadcrumb part End --}}

{{-- Page Content Start --}}
<div class="sl-pagebody">
    {{-- Form part start --}}
    <div class="row row-sm">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card pd-20 pd-sm-40">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        @if(Session::has('success'))
                        <div class="alert alert-success alertsuccess" role="alert">
                            <strong> {{ Session::get('success')}} </strong>
                        </div>
                        @endif
                        @if(Session::has('error'))
                        <div class="alert alert-warning alerterror" role="alert">
                            <strong> {{ Session::get('error') }} </strong>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                    <h6 class="card-body-title">Update Product Information</h6>
                    <form action=" {{ route('product-data-update') }} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-layout">
                            <input type="hidden" name="id" value=" {{ $productData->product_id }} ">
                            <div class="row mg-b-25">
                                <div class="col-lg-3">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Name EN: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_name_en"
                                            value=" {{ $productData->product_name_en }} "
                                            placeholder="Enter Product Name EN">
                                        @error('product_name_en')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-3">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Name BN: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_name_bn"
                                            value=" {{ $productData->product_name_bn }} "
                                            placeholder="Enter Product Name BN">
                                        @error('product_name_bn')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-3">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Code: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_code"
                                            value=" {{ $productData->product_code }} "
                                            placeholder="Enter Product Code Here">
                                        @error('product_code')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-3">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Quantity: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_qty"
                                            value=" {{ $productData->product_qty }} "
                                            placeholder="Enter Product Quantity">
                                        @error('product_qty')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-3">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Selling Price: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_selling_price"
                                            value=" {{ $productData->actual_price }} "
                                            placeholder="Enter Product Selling Price">
                                        @error('product_selling_price')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-3">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Discount Price: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_disc_price"
                                            value=" {{ $productData->discount_price }} "
                                            placeholder="Enter Product Discount Price">
                                        @error('product_disc_price')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-3">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Tags EN: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_tags_en"
                                            value=" {{ $productData->product_tags_en }} "
                                            placeholder="Enter Product Tags EN" data-role="tagsinput">
                                        @error('product_tags_en')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-3">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Tags BN: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_tags_bn"
                                            value=" {{ $productData->product_tags_bn }} "
                                            placeholder="Enter Product Tags BN" data-role="tagsinput">
                                        @error('product_tags_bn')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4  mg-t-20">
                                    <label class="ckbox">
                                        <input type="checkbox" name="hot_deals" value="1" {{ $productData->hot_deals ==
                                        1 ? 'checked' : '' }} ><span>Hot Deals</span>
                                    </label>
                                    @error('hot_deals')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div><!-- col-4 -->
                                <div class="col-lg-4  mg-t-20">
                                    <label class="ckbox">
                                        <input type="checkbox" name="featured" value="1" {{ $productData->featured == 1
                                        ? 'checked' : '' }} ><span>Featured</span>
                                    </label>
                                    @error('featured')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div><!-- col-4 -->
                                <div class="col-lg-6 mg-t-20 mg-b-20">
                                    <label class="ckbox">
                                        <input type="checkbox" name="special_offer" value="1" {{
                                            $productData->special_offer == 1 ? 'checked' : '' }} ><span>Special
                                            Offers</span>
                                    </label>
                                    @error('special_offer')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div><!-- col-6 -->
                                <div class="col-lg-6 mg-t-20 mg-b-20">
                                    <label class="ckbox">
                                        <input type="checkbox" name="special_deals" value="1" {{
                                            $productData->special_deals == 1 ? 'checked' : '' }} ><span>Special
                                            Deals</span>
                                    </label>
                                    @error('special_deals')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div><!-- col-6 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Short Description EN: <span
                                                class="tx-danger">*</span></label>
                                        <textarea name="short_descp_en" id="summernote3" cols="10"
                                            rows="5"> {{ $productData->short_descp_en }} </textarea>
                                        @error('short_descp_en')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Short Description BN: <span
                                                class="tx-danger">*</span></label>
                                        <textarea name="short_descp_bn" id="summernote4" cols="10"
                                            rows="5"> {{ $productData->short_descp_bn }} </textarea>
                                        @error('short_descp_bn')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Long Description EN: <span
                                                class="tx-danger">*</span></label>
                                        <textarea name="long_descp_en" id="summernote1" cols="10"
                                            rows="5"> {{ $productData->long_descp_en }} </textarea>
                                        @error('long_descp_en')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Long Description BN: <span
                                                class="tx-danger">*</span></label>
                                        <textarea name="long_descp_bn" id="summernote2" cols="10"
                                            rows="5"> {{ $productData->long_descp_bn }} </textarea>
                                        @error('long_descp_bn')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-3 mg-t-50">
                                </div><!-- col-3 -->
                                <div class="col-lg-3 mg-t-50">
                                </div><!-- col- -->
                            </div><!-- row -->

                            <div class="text-center form-layout-footer mg-t-30-force">
                                <button type="submit" class="btn btn-info mg-r-5">Update Product</button>
                            </div><!-- form-layout-footer -->
                        </div><!-- form-layout -->
                    </form>
                </div><!-- card -->
            </div><!-- card -->
        </div>
        <div class="col-md-1"></div>
    </div>
    {{-- Form part End --}}
    {{-- Update Product Main Thumbnail Start  --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h5 class="card-body-title"> &nbsp; &nbsp;Update Main Thumbnail Image</h5>
                <br>
                <form action=" {{ route('product-mainThumb-update') }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row">
                            <div class="col-lg-12 card bg-gray-300">
                                <div class="card-body">
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                            <img src="{{ asset($productData->product_thumbnail) }}" alt="" width="100%">
                                                    </div><!-- /.image -->
                                                </div><!-- /.product-image -->
                                                <!--<div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                {{-- <a href=" {{ url('admin/product-multiImg/delete/'. $image->multiImg_id ) }} " data-toggle="tooltip" class="btn btn-primary" title="Delete" id="delete">
                                                                    <i class="tx-18 fa fa-trash">  </i>
                                                                </a> --}}
                                                                <button class="btn btn-danger cart-btn" type="button">Delete</button>
                                                            </li>
                                                        </ul>
                                                    </div> //.action
                                                </div> /.cart -->
                                            </div><!-- /.product -->
                                        </div><!-- /.products -->
                                    </div><!-- /.item -->
                                </div><!-- /.card -->
                                <br>
                                <div class="card-text">
                                    <input type="hidden" name="old_img" value=" {{ $productData->product_thumbnail }} ">
                                    <input type="hidden" name="product_id" value=" {{ $productData->product_id  }} ">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Main Thumbnail Image: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="file" name="product_mainThmb"
                                            value=" {{ old('product_mainThmb') }} ">
                                        @error('product_mainThmb')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->

                        <div class="text-center form-layout-footer mg-t-30-force">
                            <button type="submit" class="btn btn-info mg-r-5">Update MainThmb</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
    {{-- Update Product Main Thumbnail End  --}}

</div>
{{-- Page Content End --}}
<br><br><br>

@endsection
@section('scripts')
<script>
    //Summernote text editor
    $(function () {
        'use strict';
        // Summernote editor
        $('#summernote1').summernote({
            height: 150,
            tooltip: false
        })
        $('#summernote2').summernote({
            height: 150,
            tooltip: false
        })
        $('#summernote3').summernote({
            height: 150,
            tooltip: false
        })
        $('#summernote4').summernote({
            height: 150,
            tooltip: false
        })
    });

</script>
@endsection
