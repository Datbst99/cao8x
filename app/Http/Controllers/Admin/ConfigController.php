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
        $name = $request->get('name');
        $value = $request->get('value');
        if($name == ConfigSystem::BANNER_LEFT){
            ConfigSystem::updateOrCreate([
                'key' => ConfigSystem::BANNER_LEFT
            ], [
                'value' => $value
            ]);
        }
        if($name == ConfigSystem::BANNER_RIGHT){
            ConfigSystem::updateOrCreate([
                'key' => ConfigSystem::BANNER_RIGHT
            ], [
                'value' => $value
            ]);
        }
        if($name == ConfigSystem::BANNER_MODAL){
            ConfigSystem::updateOrCreate([
                'key' => ConfigSystem::BANNER_MODAL
            ], [
                'value' => $value
            ]);
        }


        return response()->json([
            'success' => true
        ]);

    }

    public function link(Request $request)
    {
        $config = ConfigSystem::findOrFail($request->get('key'));

        $config->link = $request->get('link');
        $config->title = $request->get('title');

        $config->save();

        return redirect()->back()->with('success', 'Cập nhật đường dẫn cho banner thành công');
    }

    public function delete(Request $request)
    {
        $name = $request->get('name');

        $config = ConfigSystem::where('key', $name)->first();

        $config->value = '';

        $config->update();

        return response()->json([
            'success' => true
        ]);
    }
}
