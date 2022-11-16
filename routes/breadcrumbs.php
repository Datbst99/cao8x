<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail){
    $trail->push('Dashboard', route('admin.dashboard'));
});

Breadcrumbs::for('user', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Danh sách user', route('admin.user'));
});

Breadcrumbs::for('user.edit', function (BreadcrumbTrail $trail){
    $trail->parent('user');
    $trail->push('Chỉnh sửa thông tin');
});

Breadcrumbs::for('role', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Quản lý quyền');
});

Breadcrumbs::for('category', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Quản lý danh mục', route('admin.category'));
});

Breadcrumbs::for('category.add', function (BreadcrumbTrail $trail){
    $trail->parent('category');
    $trail->push('Thêm danh mục', route('admin.category.add'));
});

Breadcrumbs::for('product', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Sản phẩm', route('admin.product'));
});

Breadcrumbs::for('product.add', function (BreadcrumbTrail $trail){
    $trail->parent('product');
    $trail->push('Thêm sản phẩm');
});

Breadcrumbs::for('brand', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Quản lý thương hiệu', route('admin.brand'));
});

Breadcrumbs::for('brand.add', function (BreadcrumbTrail $trail){
    $trail->parent('brand');
    $trail->push('Thêm thương hiệu');
});

Breadcrumbs::for('condition', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Quản lý tình trạng', route('admin.condition'));
});

Breadcrumbs::for('condition.add', function (BreadcrumbTrail $trail){
    $trail->parent('condition');
    $trail->push('Thêm tình trạng');
});

Breadcrumbs::for('tag', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Quản lý nhãn', route('admin.tag'));
});

Breadcrumbs::for('tag.add', function (BreadcrumbTrail $trail){
    $trail->parent('tag');
    $trail->push('Thêm nhãn');
});

Breadcrumbs::for('order', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Danh sách đặt hàng', route('admin.order'));
});
