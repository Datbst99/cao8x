<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('client.home');
    }

    public function category($slug)
    {
        $category = Category::whereStatus(Category::STATUS_ACTIVE)
            ->where('slug', $slug)
            ->firstOrFail();


        return view('client.category', compact('category'));
    }
}
