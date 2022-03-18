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
        $train = new Train();

        $train->company_name = 'Trenitalia';
        $train->departure_station = 'Firenze';
        $train->arrival_station = 'Bari';
        $train->departure_time = '2022-03-18 10:14:00';
        $train->arrival_time = '2022-03-18 22:30:20';
        $train->code_number = 'HZ873R';
        $train->carriages = 9;
        $train->in_time = 0;
        $train->canceled = 0;

        $train->save();
    }
}
