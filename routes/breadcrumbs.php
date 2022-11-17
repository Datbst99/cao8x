<?php
//admin
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

Breadcrumbs::for('admin.user', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Quản lý khách hàng', route('admin.user'));
});

Breadcrumbs::for('admin.user.edit', function ($trail) {
    $trail->parent('admin.user');
    $trail->push('Chỉnh sửa thông tin khách hàng');
});

Breadcrumbs::for('admin.category', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Danh sách danh mục', route('admin.category'));
});

Breadcrumbs::for('admin.category.create', function ($trail) {
    $trail->parent('admin.category');
    $trail->push('Thêm danh mục', route('admin.category.create'));
});

Breadcrumbs::for('admin.category.edit', function ($trail) {
    $trail->parent('admin.category');
    $trail->push('Chỉnh sửa danh mục');
});

Breadcrumbs::for('admin.category.page', function ($trail){
    $trail->parent('admin.category');
    $trail->push('Cấu hình nội dung hiển thị');
});
Breadcrumbs::for('admin.config', function ($trail){
    $trail->parent('dashboard');
    $trail->push('Cấu hình hệ thống');
});

Breadcrumbs::for('admin.book', function ($trail){
    $trail->parent('dashboard');
    $trail->push('Danh sách đặt lịch');
});
