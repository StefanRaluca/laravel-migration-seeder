<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'company' => 'TreniItaly',
                'departure_station' => 'Firenze SMN',
                'arrival_station' => 'Napoli',
                'departure_time' => '2024-05-13 08:40:00',
                'arrival_time' => '2024-05-13 12:50:00',
                'train_Code' => 'ABC123',
                'number_of_carriages' => 56,
                'in_time' => true,
                'canceled' => false,
            ],
            [
                'company' => 'TreniFa',
                'departure_station' => 'Pisa',
                'arrival_station' => 'Rimini',
                'departure_time' => '2024-05-13 20:40:00',
                'arrival_time' => '2024-05-14 18:50:00',
                'train_Code' => 'CDE345',
                'number_of_carriages' => 88,
                'in_time' => false,
                'canceled' => false,
            ],
            [
                'company' => 'Company Z',
                'departure_station' => 'Modena',
                'arrival_station' => 'Milano',
                'departure_time' => '2024-05-13 06:20:00',
                'arrival_time' => '2024-05-14 13:50:00',
                'train_Code' => 'FGE654',
                'number_of_carriages' => 98,
                'in_time' => true,
                'canceled' => false,
            ],
            [
                'company' => 'Company X',
                'departure_station' => 'Trieste',
                'arrival_station' => 'Venezia',
                'departure_time' => '2024-05-14 08:08:00',
                'arrival_time' => '2024-05-15 13:50:00',
                'train_Code' => 'LPM986',
                'number_of_carriages' => 654,
                'in_time' => true,
                'canceled' => false,
            ],

        ];
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
        }
    }
}