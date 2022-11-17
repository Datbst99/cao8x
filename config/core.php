<?php
return [

    'admin' => [
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'phone' => '012345678',
        'pass' => '123456'

    ],

    'roles' => ['admin', 'staff', 'user'],


    'spreadsheet_user_id' => env('SPREADSHEET_USER_ID'),
    'spreadsheet_book_id' => env('SPREADSHEET_BOOK_ID')
];
