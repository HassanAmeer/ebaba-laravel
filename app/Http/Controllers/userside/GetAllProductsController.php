<?php

namespace App\Http\Controllers\userside;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\settings;
use \App\Models\topSlideText;
use \App\Models\toastMessage;
use \App\Models\bannerDesign;
use \App\Models\bannerImagesOnly;
use \App\Models\products;
use \App\Models\categoriesmodel;
use \App\Models\ColorsVariations;

class GetAllProductsController extends Controller
{
    public function getAllProductsF (Request $req){
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;

        $settingsData = settings::all()->first();
        $topSlideTextList = topSlideText::all();
        $toastMessageList = toastMessage::all();
        // $BannerDesign2List = bannerDesign::all();
        // $bannerImagesOnlyList = bannerImagesOnly::all();
        if(isset($req->q)){
            $productsList = Products::where('showProduct', 1)
            ->with('colorsVariationsF') 
            ->with('sizeVariationsF')   
            ->with('reviewsproductsf')
            ->where(function($query) use ($req) {
                $query->where('title', 'like', '%' . $req->q . '%')
                      ->orWhere('description', 'like', '%' . $req->q . '%')
                      ->orWhere('shortDesc', 'like', '%' . $req->q . '%');
            })
            ->get();
        }else{
            $productsList = Products::where('showProduct', 1)
            ->with('colorsVariationsF') 
            ->with('sizeVariationsF')   
            ->with('reviewsproductsf')   
            // ->where('showThis', '1')     
            ->get(); 
        }
            

        return view('allproducts', compact(['baseUrl','settingsData','topSlideTextList','toastMessageList','productsList']));

    }
}
