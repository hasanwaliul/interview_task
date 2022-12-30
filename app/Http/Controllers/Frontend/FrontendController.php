<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataServices\FrontendDataService;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function index(){
        $featureds = (new FrontendDataService())->FeaturedProductInfoCollect();
        return view('frontend.index', compact('featureds'));
    }

        // ########## Single Product Details Show  ##########
    public function SingleProductDetails($id, $slug){
        $hot_deals = (new FrontendDataService())->HotDealsRelatedProductInfoCollect();
        $singleProduct = (new FrontendDataService())->SingleProductDetails($id);
        $colorWiseProducts = (new FrontendDataService())->getAllAvailableColorWithProductId($id);
        $sizeWiseProducts = (new FrontendDataService())->getAllAvailableSizeWithProductId($id);

        $category_id = $singleProduct->category_id;
        $relatedProducts = (new FrontendDataService())->GetCategoryWiseRelatedProducts($category_id, $id);

        return view('frontend.product-details', compact('singleProduct', 'colorWiseProducts', 'sizeWiseProducts', 'relatedProducts'));
    }

    public function getProductStockAndPriceWithSelectedColor(Request $request, $id){
        $details = (new FrontendDataService())->getColorWiseProductPriceAndStock($request->id, $id);

        return response()->json( $details );
    }

}
