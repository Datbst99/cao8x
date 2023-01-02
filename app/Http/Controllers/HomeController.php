<?php

namespace App\Http\Controllers;


use App\Core\ClientGoogleSheet;
use App\Models\Book;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Models\Category;
use Carbon\Carbon;
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
        SEOTools::setTitle('Trang chủ');
        SEOTools::setDescription('Trang chủ');
        SEOTools::setCanonical('https://biyoki.com');
        return view('client.home');
    }

    public function category($slug)
    {

        $category = Category::whereStatus(Category::STATUS_ACTIVE)
            ->where('slug', $slug)
            ->firstOrFail();


        SEOTools::setTitle($category->seo_title);
        SEOTools::setDescription($category->seo_description);
        SEOTools::setCanonical('https://biyoki.com');
        return view('client.category', compact('category'));
    }

    public function book(Request $request)
    {
        if($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'phone' => 'required', 'numeric',
                'time' => 'required'
            ], [
                'time.required' => 'Vui lòng nhập thời gian'
            ]);

            $book = Book::create([
                'name' => $request->get('name'),
                'phone' => $request->get('phone'),
                'time' => $request->get('time'),
                'num_of_user' => $request->get('numberUser'),
                'adult' => $request->get('adult')
            ]);

            $data = [
                [
                    $book->name,
                    $book->phone,
                    Carbon::create($book->time)->format('d/m/Y H:i:s'),
                    $book->num_of_user,
                    $book->adult
                ]
            ];

            $userSheet = new ClientGoogleSheet();
            $userSheet->appendData($data, config('core.spreadsheet_book_id'));

            return redirect()->back()->with('success', 'Đặt lịch thành công');
        }
        SEOTools::setTitle('Đặt lịch');
        SEOTools::setDescription('Book lịch');
        SEOTools::setCanonical('https://biyoki.com');
        return view('client.book');
    }
}
