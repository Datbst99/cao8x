<?php
    use \App\Http\Controllers\Admin\DashboardController;
    use \App\Http\Controllers\Admin\ProductController;
    use \App\Http\Controllers\Admin\EditorController;
    use \App\Http\Controllers\Admin\UserController;
    use \App\Http\Controllers\Admin\RoleController;
    use \App\Http\Controllers\Admin\CategoryController;
    use \App\Http\Controllers\Admin\TagController;
    use \App\Http\Controllers\Admin\BrandController;
    use \App\Http\Controllers\Admin\ConditionController;
    use \App\Http\Controllers\Admin\OrderController;
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin|staff|financial']], function (){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


        Route::group(['prefix' => 'user'], function (){
            Route::get('/', [UserController::class, 'index'])->name('admin.user');
            Route::get('/{id}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
            Route::post('/{id}/update', [UserController::class, 'update'])->name('admin.user.update');
            Route::match(['get', 'delete'],'/{id}/delete', [UserController::class, 'delete'])->name('admin.user.delete');
        });

        Route::group(['prefix' => 'role'] , function(){
            Route::get('/', [RoleController::class, 'role'])->name('admin.role');
        });


        Route::group(['prefix' => 'category'], function (){
            Route::get('/', [CategoryController::class, 'index'])->name('admin.category');
            Route::get('add', [CategoryController::class, 'add'])->name('admin.category.add');
            Route::post('store', [CategoryController::class, 'store'])->name('admin.category.store');
            Route::match(['get', 'delete'],'/{id}/delete', [CategoryController::class, 'delete'])->name('admin.category.delete');
        });


        Route::group(['prefix' => 'product'], function (){
            Route::get('/', [ProductController::class, 'index'])->name('admin.product');
            Route::get('/add', [ProductController::class, 'add'])->name('admin.product.add');
            Route::post('/store', [ProductController::class, 'store'])->name('admin.product.store');
            Route::get('/{id}/update', [ProductController::class, 'update'])->name('admin.product.update');
            Route::match(['get', 'delete'],'/{id}/delete', [ProductController::class, 'delete'])->name('admin.product.delete');
        });

        Route::group(['prefix' => 'order'], function (){
            Route::get('/', [OrderController::class, 'index'])->name('admin.order');
        });

//        Route::group(['prefix' => 'brand'], function (){
//            Route::get('/', [BrandController::class, 'index'])->name('admin.brand');
//            Route::get('/add', [BrandController::class, 'add'])->name('admin.brand.add');
//            Route::post('/store', [BrandController::class, 'store'])->name('admin.brand.store');
//        });
//
//        Route::group(['prefix' => 'condition'], function (){
//            Route::get('/', [ConditionController::class, 'index'])->name('admin.condition');
//            Route::get('/add', [ConditionController::class, 'add'])->name('admin.condition.add');
//        });
//
//        Route::group(['prefix' => 'tag'], function (){
//            Route::get('/', [TagController::class, 'index'])->name('admin.tag');
//            Route::get('/add', [TagController::class, 'add'])->name('admin.tag.add');
//            Route::post('/store', [TagController::class, 'store'])->name('admin.tag.store');
//        });
        Route::post('editor/image_upload', [EditorController::class, 'upload'])->name('admin.editor.upload');
    });





?>
