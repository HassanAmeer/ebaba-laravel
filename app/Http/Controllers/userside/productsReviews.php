<?php

namespace App\Http\Controllers\userside;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reviewsProducts; // Ensure you import your model
use Illuminate\Support\Facades\Storage; // For storing files
use Illuminate\Support\Facades\Validator; // For validation

class productsReviews extends Controller
{
    public function productsReviewsF(Request $request)
    {
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'ratingImg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
            'ratingcommenttextinput' => 'required|string',
            'ratinguseremailphoneinput' => 'required|string',
            'ratingusername' => 'required|string',
            'choosedrating' => 'required|integer|min:1|max:5', // Assuming a rating scale of 1-5
        ]);

        if ($validator->fails()) {
            return response()->json(['resp' => 'Validation failed!', 'errors' => $validator->errors()], 422);
        }

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('ratingImg')) {
            // this is for store media in storage folder
            // $imagePath = $request->file('ratingImg')->move('uploads/images', 'public');
            // $imagePath = str_replace('uploads/', '', $imagePath);

            $destinationPath = public_path('uploads/images'); // Public path for uploads/images
            $originalFilename = $request->file('ratingImg')->getClientOriginalName();
            $request->file('ratingImg')->move($destinationPath, $originalFilename);
            $imagePath = 'images/' . $originalFilename; 
        }

        // Create the review record
        $check = reviewsProducts::create([
            'products_id' => $request->productidforratinginouthidden,
            'userRating' => $request->choosedrating,
            'userName' => $request->ratingusername,
            'userPhoneOrEmail' => $request->ratinguseremailphoneinput,
            'userComment' => $request->ratingcommenttextinput,
            'userUploadedImage' => $imagePath, // Store the path of the uploaded image
        ]);
        
        if ($check) {
            return response()->json(['resp' => 'Review added successfully!']);
        } else {
            return response()->json(['resp' => 'Review cannot be added at this time!'], 500);
        }
    }
}