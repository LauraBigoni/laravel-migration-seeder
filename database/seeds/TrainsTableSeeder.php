<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company_name' => 'Trenitalia',
                'departure_station'=> 'Bergamo',
                'arrival_station'=> 'Napoli',
                'departure_time'=> '2022-03-18 08:01:17',
                'arrival_time'=> '2022-03-18 18:01:17',
                'code_number'=> 'AU554Y',
                'carriages' => 12,
                'in_time' => false,
                'canceled' => false
            ],
            [
                'company_name' => 'Trenitalia',
                'departure_station'=> 'Napoli',
                'arrival_station'=> 'Taranto',
                'departure_time'=> '2022-03-18 08:01:17',
                'arrival_time'=> '2022-03-18 18:01:17',
                'code_number'=> 'AT554Y',
                'carriages' => 3,
                'in_time' => false,
                'canceled' => false
            ],
            [
                'company_name' => 'Trenitalia',
                'departure_station'=> 'Trento',
                'arrival_station'=> 'Venezia',
                'departure_time'=> '2022-03-18 08:01:17',
                'arrival_time'=> '2022-03-18 18:01:17',
                'code_number'=> 'VU554Y',
                'carriages' => 9,
                'in_time' => false,
                'canceled' => false
            ],
            [
                'company_name' => 'Trenitalia',
                'departure_station'=> 'Roma',
                'arrival_station'=> 'Ancona',
                'departure_time'=> '2022-03-18 08:01:17',
                'arrival_time'=> '2022-03-18 18:01:17',
                'code_number'=> 'SU554Y',
                'carriages' => 11,
                'in_time' => false,
                'canceled' => false
            ],
            [
                'company_name' => 'Trenitalia',
                'departure_station'=> 'Treviso',
                'arrival_station'=> 'Genova',
                'departure_time'=> '2022-03-18 08:01:17',
                'arrival_time'=> '2022-03-18 18:01:17',
                'code_number'=> 'KU554Y',
                'carriages' => 2,
                'in_time' => false,
                'canceled' => false
            ],
        ];

        
        foreach ($trains as $train) {
            $new_train =  new Train();
            $new_train->fill($train);
            $new_train->save();
        }
    }
}
