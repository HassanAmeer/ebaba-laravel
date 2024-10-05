<?php

namespace App\Http\Controllers\userside;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use \App\Models\Orders;
use \App\Models\Products;


class OrdersController extends Controller
{
    public function submitOrderF(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            // 'phone' => 'required|string|max:15',
        ]);
        
        // Log::info('Cart Data:', ['cart' => $request->cart]);
        $clientIP = $request->ip();
        
        if (is_array($request->cart) && !empty($request->cart)) {
            // Group cart items by productId and sum the quantities
            $groupedCart = [];
            
            foreach ($request->cart as $item) {
                $productData = Products::find($item['pid']);
                if (isset($groupedCart[$item['pid']])) {
                    // If the product is already in the array, sum the quantities
                    $groupedCart[$item['pid']]['quantity'] += $item['quantity'];
                } else {
                    // Otherwise, add the product to the grouped cart
                    $groupedCart[$item['pid']] = [
                        'pid' => $item['pid'],
                        'title' => $item['title'],
                        'img' => $item['img'],
                        'quantity' => $item['quantity'],
                        'price' => $item['price'],
                        'productsize' => $item['productsize'] ?? '',
                        'productcolorcode' => $item['productcolorcode'] ?? '',
                        'freeItem' => $productData['freeItem'],
                        // 'freeItem' => htmlspecialchars($productData['freeItem'], ENT_QUOTES, 'UTF-8'),
                    ];
                }
            }
        
            // Now loop through the groupedCart and save the orders
            foreach ($groupedCart as $item) {
                Orders::create([
                    'productId' => $item['pid'],
                    'productTitle' => $item['title'],
                    'productImage' => $item['img'],
                    'productQuantity' => $item['quantity'],
                    'productPrice' => $item['price'],
                    'sizeVariations' => $item['productsize'] ?? '',
                    'colorVariations' => $item['productcolorcode'] ?? '',
                    'freeItem' => $item['freeItem'],
                    'ipAddress' => $clientIP,
                    'userName' => $request->name,
                    'userPhone' => $request->phone,
                    'UserAddress' => $request->address,
                ]);
            }
        } else {
            return response()->json(['error' => 'Cart is empty or invalid'], 400);
        }
        return response()->json(['resp' => 'Order submitted successfully!']);
    }
}
