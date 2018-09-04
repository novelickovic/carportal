<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email'=> 'administrator@carportal.com',
            'role_id'=>1,
            'is_active'=>1,
            'password'=>bcrypt('111111'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Author',
            'email'=> 'author@carportal.com',
            'role_id'=>2,
            'is_active'=>1,
            'password'=>bcrypt('222222'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email'=> 'user@carportal.com',
            'role_id'=>3,
            'is_active'=>1,
            'password'=>bcrypt('222222'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
