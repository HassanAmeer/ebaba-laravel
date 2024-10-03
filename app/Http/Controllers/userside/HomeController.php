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

class HomeController extends Controller
{
    public function getHomeDataF (){
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;

        $settingsData = settings::all()->first();
        $topSlideTextList = topSlideText::all();
        $toastMessageList = toastMessage::all();
        $BannerDesign2List = bannerDesign::all();
        $bannerImagesOnlyList = bannerImagesOnly::all();
        $productsList = products::all();
        // $catgModel = catgModel::orderBy('id', 'desc')->get();
        // if($catgModel->count() < 1){
        //     $catgModel = 'Empty Records';
        // }
        // dd("$settingsData");
        return view('home', compact(['baseUrl','settingsData','topSlideTextList','toastMessageList','BannerDesign2List','bannerImagesOnlyList','productsList']));

    }
}
