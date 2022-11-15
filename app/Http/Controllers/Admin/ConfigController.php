<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConfigSystem;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $bannerLeft = ConfigSystem::where('key', ConfigSystem::BANNER_LEFT)->first();
        $bannerRight = ConfigSystem::where('key', ConfigSystem::BANNER_RIGHT)->first();
        $bannerModal = ConfigSystem::where('key', ConfigSystem::BANNER_MODAL)->first();


        return view('admin.config.index', compact('bannerLeft', 'bannerRight', 'bannerModal'));
    }

    public function store(Request $request)
    {

        if($request->get('banner-left')){
            ConfigSystem::updateOrCreate([
                'key' => ConfigSystem::BANNER_LEFT
            ], [
                'value' => $request->get('banner-left')
            ]);
        }
        if($request->get('banner-right')){
            ConfigSystem::updateOrCreate([
                'key' => ConfigSystem::BANNER_RIGHT
            ], [
                'value' => $request->get('banner-right')
            ]);
        }
        if($request->get('banner-modal')){
            ConfigSystem::updateOrCreate([
                'key' => ConfigSystem::BANNER_MODAL
            ], [
                'value' => $request->get('banner-modal')
            ]);
        }


        return redirect()->back()->with('success', 'Cập nhật hệ thống thành công');

    }
}
