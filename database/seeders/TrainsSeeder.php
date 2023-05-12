<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrains = [
            [


                'company' => 'ForseArrivi',
                'departure_station' => 'Roma Centrale',
                'arrival_station' => 'Napoli Centrale',
                'date' => '2023-05-12',
                'departure_time' => '13:00:00',
                'arrival_time' => '18:00:00',
                'code' => '7839',
                'number_coaches' => '8',
                'on_time' => true,
                'cancelled' => false
            ],
            [
                'company' => 'ForseArrivi',
                'departure_station' => 'Roma Centrale',
                'arrival_station' => 'Ancona',
                'date' => '2023-05-12',
                'departure_time' => '15:00:00',
                'arrival_time' => '19:00:00',
                'code' => '8103',
                'number_coaches' => '5',
                'on_time' => true,
                'cancelled' => false,
            ],
            [
                'company' => 'ForseArrivi',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Foggia',
                'date' => '2023-05-12',
                'departure_time' => '16:00:00',
                'arrival_time' => '19:00:00',
                'code' => '7294',
                'number_coaches' => '10',
                'on_time' => false,
                'cancelled' => true,
            ]
        ];


        foreach ($newTrains as $newTrain) {

            $train = new Train();

            $train->company = $newTrain['company'];
            $train->departure_station = $newTrain['departure_station'];
            $train->arrival_station = $newTrain['arrival_station'];
            $train->date = $newTrain['date'];
            $train->departure_time = $newTrain['departure_time'];
            $train->arrival_time = $newTrain['arrival_time'];
            $train->code = $newTrain['code'];
            $train->number_coaches = $newTrain['number_coaches'];
            $train->on_time = $newTrain['on_time'];
            $train->cancelled = $newTrain['cancelled'];

            $train->save();
        }
    }
}

//     [
//     'company' => 'ForseArrivi',
//     'departure_station' => 'Roma Centrale',
//     'arrival_station' => 'Ancona',
//     'date' => '2023-05-12',
//     'departure_time' => '15:00:00',
//     'arrival_time' => '19:00:00',
//     'code' => '8103',
//     'number_coaches' => '5',
//     'on_time' => '1',
//     'cancelled' => '0',
//     ],
//     [
//         'company' => 'ForseArrivi',
//         'departure_station' => 'Napoli Centrale',
//         'arrival_station' => 'Foggia',
//         'date' => '2023-05-12',
//         'departure_time' => '16:00:00',
//         'arrival_time' => '19:00:00',
//         'code' => '7294',
//         'number_coaches' => '10',
//         'on_time' => '0',
//         'cancelled' => '1',
//         ]