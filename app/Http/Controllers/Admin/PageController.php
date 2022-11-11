<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PageOfCategory;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function configPage($id)
    {
        $page = PageOfCategory::whereCategoryId($id)->first();

        return view('admin.page.config', compact('page', 'id'));
    }


    public function configChange($id, Request $request)
    {
        $category = Category::find($id);
        if(!$category){
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy danh mục'
            ]);
        }

        $page = PageOfCategory::updateOrCreate([
           'category_id' => $category->id,
        ], [
            'content' => $request->get('content'),
            'seo_title' => $request->get('seo_title'),
            'seo_keywords' => $request->get('seo_keywords'),
            'seo_description' => $request->get('content'),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Cập nhật thành công',
            'link' => route('admin.category', ['id' => $id])
        ]);
    }
}
