<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 11; $i++){
            $newTrain = new Train();
            $newTrain->Azienda =$faker->company();
            $newTrain->Stazione_di_partenza = $faker->lastName();
            $newTrain->Stazione_di_arrivo = $faker->lastName();  
            $newTrain->Orario_di_partenza = $faker->time();
            $newTrain->Orario_di_arrivo = $faker->time();
            $newTrain->Codice_Treno = $faker->postcode();  
            $newTrain->Numero_Carrozze = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newTrain->In_orario = $faker->randomElement([true, false]);
            $newTrain->Cancellato = $faker->randomElement([true, false]);
            $newTrain->save();
        }
    }
}
