<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //faker
        for ($i = 0; $i < 15; $i++) {

            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->unique()->city();
            $newTrain->departure_time = $faker->dateTimeThisMonth();
            $newTrain->arrival_time = $faker->dateTimeBetween('$departure_time', '+1 day');
            $newTrain->train_Code = $faker->ean8();
            $newTrain->number_of_carriages = $faker->numberBetween(1, 30);
            $newTrain->in_time = $faker->boolean(30);
            $newTrain->canceled = $faker->boolean(20);
            $newTrain->save();

        }






        //Seeder
        /*  $trains = (config("db.trains"));
         foreach ($trains as $train) {
             $newTrain = new Train();
             $newTrain->company = $train['company'];
             $newTrain->departure_station = $train['departure_station'];
             $newTrain->arrival_station = $train['arrival_station'];
             $newTrain->departure_time = $train['departure_time'];
             $newTrain->arrival_time = $train['arrival_time'];
             $newTrain->train_Code = $train['train_Code'];
             $newTrain->number_of_carriages = $train['number_of_carriages'];
             $newTrain->in_time = $train['in_time'];
             $newTrain->canceled = $train['canceled'];
             $newTrain->save();
         } */
    }
}