<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\ProductController;


    // ################################## Frontend  ##################################
    Route::get('/',[FrontendController::class, 'index'])->name('frontend');
    Route::get('single-prduct/details/{id}/{slug}', [FrontendController::class, 'SingleProductDetails'])->name('single-product-details');


    /* ###########################################################################################
          ############################### Product Part Start  ###############################
       ########################################################################################### */

    Route::get('dashboard', [ProductController::class, 'AdminDashboard'])->name('admin-dashboard');

    Route::get('all-product', [ProductController::class, 'index'])->name('products');
    Route::post('product/add', [ProductController::class, 'productDataAdd'])->name('product-add');
    Route::get('manage-products', [ProductController::class, 'productDataManage'])->name('products-manage');
    Route::get('product-edit/{id}', [ProductController::class, 'productDataEdit'])->name('product-data-edit');
    Route::post('product-data/update', [ProductController::class, 'productDataUpdate'])->name('product-data-update');

    // ########## Single Product Information View  ##########
    Route::get('product-info/{id}', [ProductController::class, 'singleProductInfo'])->name('single-product-info');

    // ########## Product Active & Inactive Part  ##########
    Route::get('product-inactive/{id}', [ProductController::class, 'productDataInactive'])->name('product-data-inactive');
    Route::get('product-active/{id}', [ProductController::class, 'productDataActive'])->name('product-data-active');

    // ########## Product Multi Image Part  ##########
    Route::post('product-multiImg/update', [ProductController::class, 'productMultiImgUpdate'])->name('product-multiImg-update');
    Route::get('product-multiImg/delete/{id}', [ProductController::class, 'productMultiImgDelete'])->name('product-multiImg-delete');

    // ########## Product Main Thumbnail Image Update  ##########
    Route::post('product-mainThumbnail/update', [ProductController::class, 'productMainThumbnailUpdate'])->name('product-mainThumb-update');

    // ########## Color Wise Product Prize And Stock Details  ##########
    Route::get('color-wise/product-status/{prodId}', [FrontendController::class, 'getProductStockAndPriceWithSelectedColor'])->name('price-stock.status-color');
