<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::limit(8)->get();

        $categories = Category::all();
        return view('landing.op_v2', compact('products', 'categories'));
    }

    public function add(Request $request)
    {
        $order = Order::create([
           'user' => $request->get('name'),
           'phone' => $request->get('add_phone'),
           'note' => $request->get('subject'),
           'data' =>  $request->get('message'),
        ]);

        return response()->json([
            'Gửi yêu cầu thành công!'
        ]);
    }

    public function cart(Request $request)
    {
        $push = $request->session()->push('cart', $request->get('id'));

        return response()->json([
            'success' => true,
            'message' => $request->session()->get('cart')
        ]);
    }

    public function phone(Request $request)
    {
        if ($request->get('phone')) {
            $order = Order::create([
                'phone' => $request->get('phone'),
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Đã gửi yêu cầu gọi lại'
        ]);
    }
}
