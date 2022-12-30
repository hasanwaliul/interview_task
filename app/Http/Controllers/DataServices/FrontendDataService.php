<?php
    namespace App\Http\Controllers\DataServices;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductSizeColorLink;

class FrontendDataService {

    // Single Product Details Start
    public function SingleProductDetails($product_id){
        return Product::where('product_status', 1)->where('product_id', $product_id)->first();
    }
    public function GetCategoryWiseRelatedProducts($catg_id, $productId){
        return Product::where('product_status', 1)->where('product_id', '!=', $productId)->orderBy('product_id', 'DESC')->get();
    }
    // Single Product Details End

    public function FeaturedProductInfoCollect(){
        return Product::where('featured', 1)->where('product_status', 1)->orderBy('product_id', 'DESC')->get();
    }

    public function HotDealsRelatedProductInfoCollect(){
        return Product::where('hot_deals', 1)->where('product_status', 1)->orderBy('product_id', 'DESC')->get();
    }

    public function getAllAvailableColorWithProductId($id){
        return ProductSizeColorLink::where('product_id', $id)->get();
    }

    public function getColorWiseProductPriceAndStock($product,$color ){
        return ProductSizeColorLink::where('product_id', $product)
        ->where('color_id',$color)->first();
    }

    public function getAllAvailableSizeWithProductId($id){
        return ProductSizeColorLink::where('product_id', $id)->get();
    }

}
