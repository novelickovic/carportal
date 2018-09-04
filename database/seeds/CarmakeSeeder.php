<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarmakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('carmakes')->insert([
            'name' => 'Audi',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmakes')->insert([
            'name' => 'Mercedes',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmakes')->insert([
            'name' => 'Porsche',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmakes')->insert([
            'name' => 'BMW',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmakes')->insert([
            'name' => 'Alfa Romeo',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmakes')->insert([
            'name' => 'Fiat',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmakes')->insert([
            'name' => 'Ford',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmakes')->insert([
            'name' => 'Honda',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmakes')->insert([
            'name' => 'Opel',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmakes')->insert([
            'name' => 'Toyota',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmakes')->insert([
            'name' => 'Volkswagen',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmakes')->insert([
            'name' => 'Chevrolet',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

    }
}
