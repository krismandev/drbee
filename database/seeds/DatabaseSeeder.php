<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Krisman',
            'email' => 'krismanpratama@gmail.com',
            'password' => bcrypt('zzzzzzzz')
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
