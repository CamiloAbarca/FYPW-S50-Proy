<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->createAdmin();
        // \App\Models\User::factory(10)->create();
    }
    public function createAdmin(){
        $user = new User;
            $user->name = 'Admin';
            $user->email = 'admin@admin.cl';
            $user->password = bcrypt('123');
            $user->role = 'admin';

            $user->save();
    }
}
