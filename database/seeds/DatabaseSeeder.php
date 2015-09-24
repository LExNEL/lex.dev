<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(UsersSeeder::class);

        Model::reguard();
    }
}

class UsersSeeder extends Seeder
{

    function __construct()
    {
        # code...
    }

    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'name' => 'Untitled',
            'email' => 'mail@mail.com',
            'password' => '12345678',
        ]);
    }
}
