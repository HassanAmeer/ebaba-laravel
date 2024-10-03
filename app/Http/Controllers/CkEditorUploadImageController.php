<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CkEditorUploadImageController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'upload' => 'required|image|max:2048', // Validate the image file
        ]);

        // Store the uploaded image in the public/uploads directory
        $path = $request->file('upload')->store('uploads', 'public');

        // Return the URL of the uploaded image in the required format for CKEditor
        return response()->json([
            'url' => asset('storage/' . $path), // Generates the full URL to the stored image
        ]);
    }
}

?>