<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarmodelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'A2',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'A3',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'S3',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'A4',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'S4',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'A5',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'S5',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'A6',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'S6',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'A7',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'S7',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'A8',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'S8',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'Q3',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'Q5',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Audi',
            'name'=>'Q7',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'1 Series',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'3 Series',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'4 Series',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'5 Series',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'6 Series',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'7 Series',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'i3',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'i8',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'X3',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'X5',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'X7',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'M3',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'BMW',
            'name'=>'M5',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'A classe',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'B classe',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'C classe',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'E classe',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'S classe',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'G classe',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'CL',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'CLK',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'GLK',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'SL',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'SLK',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'CLA',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Mercedes',
            'name'=>'GLA',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('carmodels')->insert([
            'carmake_name' => 'Porsche',
            'name'=>'911',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Porsche',
            'name'=>'Boxster',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Porsche',
            'name'=>'Cayenne',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Porsche',
            'name'=>'Carrera',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Porsche',
            'name'=>'Panamera',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Alfa Romeo',
            'name'=>'33',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Alfa Romeo',
            'name'=>'147',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Alfa Romeo',
            'name'=>'155',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Alfa Romeo',
            'name'=>'156',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Alfa Romeo',
            'name'=>'159',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Alfa Romeo',
            'name'=>'Brera',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Alfa Romeo',
            'name'=>'GT',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Alfa Romeo',
            'name'=>'Spider',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Alfa Romeo',
            'name'=>'Giulietta',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Alfa Romeo',
            'name'=>'Giulia',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('carmodels')->insert([
            'carmake_name' => 'Fiat',
            'name'=>'500',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Fiat',
            'name'=>'500 L',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Fiat',
            'name'=>'500 X',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Fiat',
            'name'=>'Panda',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Fiat',
            'name'=>'Punto',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Fiat',
            'name'=>'Punto Evo',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Fiat',
            'name'=>'Grande Punto',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Fiat',
            'name'=>'Multipla',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Fiat',
            'name'=>'Stilo',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Fiat',
            'name'=>'Bravo',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Fiat',
            'name'=>'Brava',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Ford',
            'name'=>'Ka',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Ford',
            'name'=>'Fiesta',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Ford',
            'name'=>'Focus',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Ford',
            'name'=>'Mondeo',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Ford',
            'name'=>'Taurus',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Ford',
            'name'=>'Mustang',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Ford',
            'name'=>'GT',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Ford',
            'name'=>'C-Max',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Ford',
            'name'=>'S-Max',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Ford',
            'name'=>'Kuga',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Honda',
            'name'=>'Civic',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Honda',
            'name'=>'Insight',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Honda',
            'name'=>'Accord',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Honda',
            'name'=>'Clarity',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Honda',
            'name'=>'HR-V',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Honda',
            'name'=>'CR-V',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Honda',
            'name'=>'Odyssey',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Opel',
            'name'=>'Astra',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Opel',
            'name'=>'Corsa',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Opel',
            'name'=>'Vecta',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Opel',
            'name'=>'Agila',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Opel',
            'name'=>'Zafira',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Opel',
            'name'=>'Meriva',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Opel',
            'name'=>'Tigra',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Opel',
            'name'=>'Omega',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Opel',
            'name'=>'Antara',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Toyota',
            'name'=>'Century',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Toyota',
            'name'=>'Crown',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Toyota',
           'name'=>'Camry',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Toyota',
           'name'=>'Prius',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Toyota',
           'name'=>'Corolla',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Toyota',
           'name'=>'Land Cruiser',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Toyota',
           'name'=>'Avensis',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'Polo',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'Golf 1',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'Golf 2',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'Golf 3',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'Golf 4',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'Golf 5',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'Golf 6',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'Golf 7',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'Passat',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'Up',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'Polo',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'Beetle',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'EOS',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
       DB::table('carmodels')->insert([
           'carmake_name' => 'Volkswagen',
           'name'=>'FOX',
           'created_at'=>Carbon::now(),
           'updated_at'=>Carbon::now()
       ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Volkswagen',
            'name'=>'Jetta',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Volkswagen',
            'name'=>'Luppo',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Volkswagen',
            'name'=>'Tuareg',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Volkswagen',
            'name'=>'Tiguan',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Chevrolet',
            'name'=>'Camaro',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Chevrolet',
            'name'=>'Captiva',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Chevrolet',
            'name'=>'Corvette',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Chevrolet',
            'name'=>'Cruze',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Chevrolet',
            'name'=>'Epica',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Chevrolet',
            'name'=>'Kalos',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Chevrolet',
            'name'=>'Lacetti',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Chevrolet',
            'name'=>'Matiz',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Chevrolet',
            'name'=>'Spark',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('carmodels')->insert([
            'carmake_name' => 'Chevrolet',
            'name'=>'Tacuma',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);


    }
}
