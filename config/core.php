<?php

return [
    /*
     *  Quyền quản trị hệ thống mặc định
     *  Không thay đổi
     *
     *  admin => quản trị toàn hệ thống,
     *  staff => nhân viên trong hệ thống,
     *  financial => quản trị tài chính
     *  user => người mua hàng
     *
     *
     */
    'roles' => [
        'admin' => 'Admin',
        'staff' => 'Staff',
        'financial' => 'Financial',
        'user' => 'User'
    ],

    'permissions' => [
        'post_product' => 'Đăng sản phẩm',
        'view_report' => 'Xem báo cáo',
    ],

    /*
     * Admin mặc định khi chạy seed
     * Quản trị toàn hệ thông
     */
    'admin' => [
        'email' => 'admin@admin.com',
        'pass' => '123456'
    ]
];

