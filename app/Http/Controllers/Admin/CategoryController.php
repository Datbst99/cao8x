<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::get()->toTree();
        return view('admin.category.index', compact('categories'));
    }

    public function add()
    {
        $categories = Category::whereNull('parent_id')->pluck('name' ,'id')->toArray();
        return view('admin.category.add', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Vui lòng nhập tên danh mục'
        ]);

        $category = new Category();
        $category->name = $request->get('name');
        $category->meta_title = $request->get('meta_title');
        $category->meta_keyword = $request->get('meta_keyword');
        $category->meta_description = $request->get('meta_description');
        $category->status =  $request->get('status') == Category::STATUS_ACTIVE ? Category::STATUS_ACTIVE : Category::STATUS_INIT;

        if($request->get('parent')) {
            $parent = Category::find($request->get('parent'));
            if($parent) {
                $category->appendToNode($parent);
            }
        }
        $category->save();

        return redirect()->route('admin.category')->with('success', 'Tạo danh mục thành công');
    }

    public function delete($id)
    {
        $product = Category::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.category')->with('success', 'Xóa danh mục thành công');
    }
}
