<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use JavaScript;
class ProductController extends Controller
{
    //
    public function index(Request $request){
        $products = Product::query();
        if($request->get('search')) {
            $products = $products->where('name', 'LIKE', '%'.$request->get('search').'%');
        }
        $products = $products->paginate(15)->appends($request->all());
        return view('admin.product.index', compact('products'));
    }

    public function add(){

        $categories = Category::where('status', Category::STATUS_ACTIVE)
            ->pluck('name', 'id')->toArray();

        return view('admin.product.add')
            ->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'sale_price' => 'required',
           'category_id' => 'required',
           'thumbnail' => 'required',
        ], [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'sale_price.required' => 'Vui lòng nhập giá khuyến mại',
            'category_id.required' => 'Vui lòng chọn danh mục sản phẩm',
            'thumbnail.required' => 'Vui lòng chọn hình ảnh đại diện cho sản phẩm',
        ]);

        $product = new Product();
        $product->name = $request->get('name');
        $product->price =  $request->get('price');
        $product->sale_price = $request->get('sale_price');
        $product->category_id = $request->get('category_id');
        $product->thumbnail = $request->get('thumbnail');
        $product->meta_title =  $request->get('meta_title');
        $product->meta_keyword =  $request->get('meta_keyword');
        $product->meta_description =  $request->get('meta_description');
        $product->status =  $request->get('status') == Product::ACTIVE_STATUS ? Product::ACTIVE_STATUS : Product::DISABLE_STATUS;
        $product->save();

        return redirect()->route('admin.product')->with('success', 'Thêm sản phẩm thành công');
    }

    public function update($id)
    {

    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.product')->with('success', 'Xóa sản phẩm thành công');
    }
}
