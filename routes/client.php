<?php
    use \App\Http\Controllers\Client\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('client.home');
Route::post('/cart', [HomeController::class, 'cart'])->name('client.cart');
Route::match(['post', 'get'],'/phone', [HomeController::class, 'phone'])->name('client.phone');
Route::match(['post', 'get'], '/add' ,[HomeController::class, 'add'])->name('client.add');

?>
