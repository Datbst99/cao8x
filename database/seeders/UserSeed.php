<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = config('core.admin.name');
        $user->email = config('core.admin.email');
        $user->phone = config('core.admin.phone');
        $user->password =\Hash::make(config('core.admin.pass'));
        $user->save();


        foreach (config('core.roles') as $item) {
            Role::create(['name' => $item]);
        }

        $user->assignRole('admin');
    }
}
