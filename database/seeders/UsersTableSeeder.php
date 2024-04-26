<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\User::truncate();
        \App\User::create([
            'name' => 'Super Admin',
            'username' => 'admin',
            'password' => bcrypt('12345678'),
            'status' => config('constants.STATUS.ACTIVE')
        ]);
    }
}
