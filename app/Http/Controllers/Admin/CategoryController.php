<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')
            ->orderBy('index')
            ->get();

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::whereNull('parent_id')
            ->orderBy('index')
            ->pluck('title', 'id')
            ->toArray();


        return view('admin.category.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'index' => 'required|numeric',
            'parent_id' => 'nullable|numeric'
        ], [
            'title.required' => 'Vui lòng nhập tên danh mục',
            'index.required' => 'Vui lòng nhập thứ tự hiển thị danh mục',
            'index.numeric' => 'Vui lòng nhập số',
        ]);

        $category = Category::create([
            'title' => $request->get('title'),
            'index' => $request->get('index'),
            'parent_id' => $request->get('parent_id'),
            'status' => $request->get('status') == Category::STATUS_ACTIVE ? Category::STATUS_ACTIVE : Category::STATUS_INACTIVE
        ]);

        return redirect()->route('admin.category')->with('success', 'Thêm danh mục thành công');
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit($id, Request $request)
    {
        $categories = Category::whereNull('parent_id')
            ->orderBy('index')
            ->pluck('title', 'id')
            ->toArray();
        $category = Category::findOrFail($id);

        if($request->isMethod('post')){
            $request->validate([
                'title' => 'required',
                'index' => 'required|numeric',
                'parent_id' => 'nullable|numeric'
            ], [
                'title.required' => 'Vui lòng nhập tên danh mục',
                'index.required' => 'Vui lòng nhập thứ tự hiển thị danh mục',
                'index.numeric' => 'Vui lòng nhập số',
            ]);

            $category->title = $request->get('title');
            $category->index = $request->get('index');
            $category->parent_id = $request->get('parent_id');
            $category->status = $request->get('status') == Category::STATUS_ACTIVE ? Category::STATUS_ACTIVE : Category::STATUS_INACTIVE;
            $category->update();

            return redirect()->route('admin.category')->with('success', 'Cập nhật danh mục thành công');
        }

        return view('admin.category.edit', compact('category', 'categories'));
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.category')->with('success', 'Xóa danh mục thành công');
    }
}
