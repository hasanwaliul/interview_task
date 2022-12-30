<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function AdminDashboard(){
        return view('admin.index');
    }





    // ############################## Individual Product view ##############################
    public function singleProductInfo($id){
        $productData = Product::where('product_id', $id)->first();
        return view('admin.product.view', compact('productData'));
    }

    public function index(){
        return view('admin.product.index');
    }

    public function productDataAdd(Request $request){
        $this->validate($request, [
            'product_name_en' => 'required',
            'product_name_bn' => 'required',
            'product_code' => 'required',
            'product_qty' => 'required',
            'product_tags_en' => 'required',
            'product_tags_bn' => 'required',
            'product_selling_price' => 'required',
            'product_disc_price' => 'required',
            'long_descp_en' => 'required',
            'long_descp_bn' => 'required',
            'short_descp_en' => 'required',
            'short_descp_bn' => 'required',
            'hot_deals' => 'required',
            'featured' => 'required',
            'special_offer' => 'required',
            'special_deals' => 'required',
            'product_mainthumb' => 'required',
            'product_mtpImg' => 'required',
        ], [
            'product_name_en.required' => 'Please Enter Product Name In English',
            'product_name_bn.required' => 'Please Enter Product Name In Bangla',
            'product_code.required' => 'Please Enter Product Code',
            'product_qty.required' => 'Please Enter Product Quantity',
            'product_tags_en.required' => 'Please Enter Product Tags In English',
            'selling_price.required' => 'Please Enter Product Selling Price',
            'discount_price.required' => 'Please Enter Product Discount Price',
            'long_descp_en.required' => 'Please Enter Product Long Description In English',
            'long_descp_bn.required' => 'Please Enter Product Long Description In Bangla',
            'short_descp_en.required' => 'Please Enter Product Short Description In English',
            'short_descp_bn.required' => 'Please Enter Product Short Description In Bangla',
            'hot_deals.required' => 'Please Check Product Hot deals Option',
            'featured.required' => 'Please Check Product Featured Option',
            'special_offer.required' => 'Please Check Product Special Offer Option',
            'special_deals.required' => 'Please Check Product Special Deals Option',
            'product_mainthumb.required' => 'Please Put Product Thumbnail Image',
            'product_mtpImg.required' => 'Please Put Product Multiple Image',
        ]);

            $file = $request->file('product_mainthumb');
            $appoint_name = 'product-img' . time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = "uploads/product/";
            $uploadPath =  $destinationPath . $appoint_name;
            $file->move($destinationPath, $appoint_name);


        $productData_Id = Product::insertGetId([
            'product_name_en' => $request->product_name_en,
            'product_name_bn' => $request->product_name_bn,
            'product_slug_en' => strtolower(str_replace(' ','-', $request->product_name_en)),
            'product_slug_bn' => strtolower(str_replace(' ','-', $request->product_name_bn)),
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'product_tags_en' => $request->product_tags_en,
            'product_tags_bn' => $request->product_tags_bn,
            'actual_price' => $request->product_selling_price,
            'discount_price' => $request->product_disc_price,
            'long_descp_en' => $request->long_descp_en,
            'long_descp_bn' => $request->long_descp_bn,
            'short_descp_en' => $request->short_descp_en,
            'short_descp_bn' => $request->short_descp_bn,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,
            'product_thumbnail' => $uploadPath,
            'created_at' => Carbon::now(),
        ]);

        if($productData_Id){
            // Session::flash('success', 'Information Has Been Updated Successfully'); //Custom alert
            return redirect()->back()->with('message','Information Added Successfully'); //Toastr alert
        }else {
            // Session::flash('error', 'Somthing Went wrong! Please try again later');
            Session::flash('error', 'Somthing Went wrong! Please try again later');
            return redirect()->back();
        }
    }

    public function productDataManage(){
        $products = Product::latest()->get();
        return view('admin.product.manage', compact('products'));
    }

    public function productDataEdit($id){
        $productData = Product::where('product_id', $id)->first();
        return view('admin.product.edit', compact('productData'));
    }

    public function productDataUpdate(Request $request){
        $this->validate($request, [
            'product_name_en' => 'required',
            'product_name_bn' => 'required',
            'product_code' => 'required',
            'product_qty' => 'required',
            'product_tags_en' => 'required',
            'product_tags_bn' => 'required',
            'product_selling_price' => 'required',
            'product_disc_price' => 'required',
            'long_descp_en' => 'required',
            'long_descp_bn' => 'required',
            'short_descp_en' => 'required',
            'short_descp_bn' => 'required',
            'hot_deals' => 'required',
            'featured' => 'required',
            'special_offer' => 'required',
            'special_deals' => 'required',
        ], [
            'product_name_en.required' => 'Please Enter Product Name In English',
            'product_name_bn.required' => 'Please Enter Product Name In Bangla',
            'product_code.required' => 'Please Enter Product Code',
            'product_qty.required' => 'Please Enter Product Quantity',
            'product_tags_en.required' => 'Please Enter Product Tags In English',
            'product_selling_price.required' => 'Please Enter Product Selling Price',
            'product_disc_price.required' => 'Please Enter Product Discount Price',
            'long_descp_en.required' => 'Please Enter Product Long Description In English',
            'long_descp_bn.required' => 'Please Enter Product Long Description In Bangla',
            'short_descp_en.required' => 'Please Enter Product Short Description In English',
            'short_descp_bn.required' => 'Please Enter Product Short Description In Bangla',
            'hot_deals.required' => 'Please Check Product Hot deals Option',
            'featured.required' => 'Please Check Product Featured Option',
            'special_offer.required' => 'Please Check Product Special Offer Option',
            'special_deals.required' => 'Please Check Product Special Deals Option',
        ]);
        $productId = $request->id;
        $productUpdate = Product::where('product_id', $productId)->update([
            'product_name_en' => $request->product_name_en,
            'product_name_bn' => $request->product_name_bn,
            'product_slug_en' => strtolower(str_replace(' ','-', $request->product_name_en)),
            'product_slug_bn' => strtolower(str_replace(' ','-', $request->product_name_bn)),
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'product_tags_en' => $request->product_tags_en,
            'product_tags_bn' => $request->product_tags_bn,
            'actual_price' => $request->product_selling_price,
            'discount_price' => $request->product_disc_price,
            'long_descp_en' => $request->long_descp_en,
            'long_descp_bn' => $request->long_descp_bn,
            'short_descp_en' => $request->short_descp_en,
            'short_descp_bn' => $request->short_descp_bn,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,
            'updated_at' => Carbon::now(),
        ]);

        if($productUpdate){
            // Session::flash('success', 'Information Has Been Updated Successfully'); //Custom alert
            return redirect()->route('products-manage')->with('message','Product Data Updated Successfully'); //Toastr alert
        }else {
            // Session::flash('error', 'Somthing Went wrong! Please try again later');
            Session::flash('error', 'Somthing Went wrong! Please try again later');
            return redirect()->back();
        }
    }
    // ############################## Product Data Active & Inactive Start ################################
    public function productDataInactive($id){
        $productDective = Product::where('product_id', $id)->update([
            'product_status' => 0,
            'updated_at' => Carbon::now(),
        ]);

        if($productDective){
            // Session::flash('success', 'Information Has Been Updated Successfully'); //Custom alert
            return redirect()->route('products-manage')->with('error','Product Data Inactive Now!'); //Toastr alert
        }else {
            // Session::flash('error', 'Somthing Went wrong! Please try again later');
            Session::flash('error', 'Somthing Went wrong! Please try again later');
            return redirect()->back();
        }
    }

    public function productDataActive($id){
        $producActive = Product::where('product_id', $id)->update([
            'product_status' => 1,
            'updated_at' => Carbon::now(),
        ]);

        if($producActive){
            // Session::flash('success', 'Information Has Been Updated Successfully'); //Custom alert
            return redirect()->route('products-manage')->with('message','Product Activated Successfully'); //Toastr alert
        }else {
            // Session::flash('error', 'Somthing Went wrong! Please try again later');
            Session::flash('error', 'Somthing Went wrong! Please try again later');
            return redirect()->back();
        }
    }

    // ############################## Product Data Active & Inactive End ################################

    public function productMainThumbnailUpdate(Request $request){
        $this->validate($request, [
            'product_mainThmb' => 'required',
        ], [
            'product_mainThmb.required' => 'Please select product main thumbnail image for update',
        ]);

        $product_id = $request->product_id;
        $old_Img = $request->old_img;
        unlink($old_Img);


        $file = $request->file('product_mainthumb');
        $appoint_name = 'product-img' . time() . '.' . $file->getClientOriginalExtension();
        $destinationPath = "uploads/product/";
        $uploadPath =  $destinationPath . $appoint_name;
        $file->move($destinationPath, $appoint_name);

        $productInfo = Product::where('product_id', $product_id)->update([
            'product_thumbnail' => $uploadPath,
            'updated_at' => Carbon::now(),
        ]);

        if($productInfo){
            // Session::flash('success', 'Information Has Been Updated Successfully'); //Custom alert
            return redirect()->back()->with('message','Product Main Thumbnail Image Updated Successfully'); //Toastr alert
        }else {
            // Session::flash('error', 'Somthing Went wrong! Please try again later');
            Session::flash('error', 'Somthing Went wrong! Please try again later');
            return redirect()->back();
        }
    }


}
