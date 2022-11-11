<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function configPage($id)
    {


        return view('admin.page.config');
    }
}
