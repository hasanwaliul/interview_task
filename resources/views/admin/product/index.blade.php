@extends('admin.layouts.master')
@section('title', 'Product')
@section('products')
active show-sub
@endsection
@section('add-products')
active
@endsection
@section('content')
{{-- Breadcrumb part start --}}
<nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active">Dashboard</span>
    <a class="breadcrumb-item" href="">Products</a>
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
                    <h6 class="card-body-title">Add New Product</h6>
                    <form action=" {{ route('product-add') }} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-layout">
                            <div class="row mg-b-25">
                                <div class="col-lg-4">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Name EN: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_name_en"
                                            value=" {{ old('product_name_en') }} " placeholder="Enter Product Name EN">
                                        @error('product_name_en')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Name BN: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_name_bn"
                                            value=" {{ old('product_name_bn') }} " placeholder="Enter Product Name BN">
                                        @error('product_name_bn')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Code: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_code"
                                            value=" {{ old('product_code') }} " placeholder="Enter Product Code Here">
                                        @error('product_code')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Quantity: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_qty"
                                            value=" {{ old('product_qty') }} " placeholder="Enter Product Quantity">
                                        @error('product_qty')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Tags EN: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_tags_en"
                                            value=" {{ old('product_tags_en') }} " placeholder="Enter Product Tags EN"
                                            data-role="tagsinput">
                                        @error('product_tags_en')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Tags BN: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_tags_bn"
                                            value=" {{ old('product_tags_bn') }} " placeholder="Enter Product Tags BN"
                                            data-role="tagsinput">
                                        @error('product_tags_bn')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Selling Price: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_selling_price"
                                            value=" {{ old('product_selling_price') }} "
                                            placeholder="Enter Product Selling Price">
                                        @error('product_selling_price')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Discount Price: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="product_disc_price"
                                            value=" {{ old('product_disc_price') }} "
                                            placeholder="Enter Product Discount Price">
                                        @error('product_disc_price')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Main Thumbnail: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="file" name="product_mainthumb" id="mainThmb" placeholder="Enter Product Discount Price"
                                            value=" {{ old('product_mainthumb') }} " onchange="maniThambUrl(this)">
                                        @error('product_mainthumb')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                        <img src="" id="mainThmb">
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Product Multiple Image: <span
                                                class="tx-danger">*</span></label>
                                        <input class="form-control" type="file" name="product_mtpImg[]" id="multiImg"
                                            value=" {{ old('product_mtpImg') }} " placeholder="Enter Product Discount Price" multiple>
                                        @error('product_mtpImg')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                        <div class="row" id="preview_image1"></div>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-6">
                                    <div class="form-group mg-t-20-force">
                                        <label class="form-control-label">Short Description EN: <span
                                                class="tx-danger">*</span></label>
                                        <textarea name="short_descp_en" id="summernote3" cols="10"
                                            rows="5"> {{ old('short_descp_en') }} </textarea>
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
                                            rows="5"> {{ old('short_descp_bn') }} </textarea>
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
                                            rows="5"> {{ old('long_descp_en') }} </textarea>
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
                                            rows="5"> {{ old('long_descp_bn') }} </textarea>
                                        @error('long_descp_bn')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- col-6 -->
                                <div class="col-lg-3 mg-t-50">
                                    <label class="ckbox">
                                        <input type="checkbox" name="hot_deals" value="1"><span>Hot Deals</span>
                                    </label>
                                    @error('hot_deals')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div><!-- col-3 -->
                                <div class="col-lg-3 mg-t-50">
                                    <label class="ckbox">
                                        <input type="checkbox" name="featured" value="1"><span>Featured</span>
                                    </label>
                                    @error('featured')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div><!-- col-3 -->
                                <div class="col-lg-3 mg-t-50">
                                    <label class="ckbox">
                                        <input type="checkbox" name="special_offer" value="1"><span>Special
                                            Offers</span>
                                    </label>
                                    @error('special_offer')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div><!-- col-3 -->
                                <div class="col-lg-3 mg-t-50">
                                    <label class="ckbox">
                                        <input type="checkbox" name="special_deals" value="1"><span>Special Deals</span>
                                    </label>
                                    @error('special_deals')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div><!-- col-3 -->
                            </div><!-- row -->

                            <div class="text-center form-layout-footer mg-t-50-force">
                                <button type="submit" class="btn btn-info mg-r-5">Add Product</button>
                            </div><!-- form-layout-footer -->
                        </div><!-- form-layout -->
                    </form>
                </div><!-- card -->
            </div><!-- card -->
        </div>
        <div class="col-md-1"></div>
    </div>
    {{-- Form part End --}}
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

    //  ################## Selected Multiple Image preview ###################
    $(document).ready(function () {
        $('#multiImg').on('change', function () { //on file input change
            if (window.File && window.FileReader && window.FileList && window
                .Blob) //check File API supported browser
            {
                var data = $(this)[0].files; //this file data

                $.each(data, function (index, file) { //loop though each file
                    if (/(\.|\/)(gif|jpe?g|png)$/i.test(file
                        .type)) { //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function (file) { //trigger function on successful read
                            return function (e) {
                                var img = $('<img/>').addClass('thumb').attr('src',
                                    e.target.result).width(80)
                                    .height(80); //create image element
                                $('#preview_image1').append(
                                    img); //append image to output element
                            };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });

            } else {
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
    });

    //  ################## Selected Single Image preview ###################
    function maniThambUrl(ipnut){
        if(input.files && input.files[0]){
            var reader = new FileReader();

            reader.onload = function(e){
                $('#mainThumb').attr('src',e.target.result).width(80).height(80)
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
