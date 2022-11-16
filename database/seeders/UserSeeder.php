<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'admin',
            'email' => config('core.admin.email'),
            'password' => bcrypt(config('core.admin.pass'))
        ]);



        $user->assignRole('admin');
    }
}
