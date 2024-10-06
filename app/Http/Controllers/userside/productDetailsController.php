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

class productDetailsController extends Controller
{
    public function productDetailsF (Request $req){
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;

        $settingsData = settings::all()->first();
        $topSlideTextList = topSlideText::all();
        $toastMessageList = toastMessage::all();
        $BannerDesign2List = bannerDesign::all();
        $bannerImagesOnlyList = bannerImagesOnly::all();
        $singleProduct = Products::with(['colorsVariationsF', 'sizeVariationsF', 'reviewsproductsf'])
        ->where('showProduct', 1)
        ->find($req->id);

        if (!$singleProduct) {
            $singleProduct = "no";
        }
        // dd($req->id);
        // dd($singleProduct);

        $productsList = Products::where('showProduct', 1)
                        ->with('colorsVariationsF') 
                        ->with('sizeVariationsF')  
                        ->with('reviewsproductsf')   
                        // ->where('showThis', '1')     
                        ->get();      
        return view('productdetail', compact(['baseUrl','settingsData','topSlideTextList','toastMessageList','BannerDesign2List','bannerImagesOnlyList','productsList','singleProduct']));

    }
}