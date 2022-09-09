<?php

use App\Train;
use Illuminate\Database\Seeder;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // '2001-01-14 08:45'

    public function run()
    { 
        $trains = [
            [ 
                'company' => 'Italo',
                'departure_station' => 'TORINO PORTA NUOVA',
                'arrival_station' => 'MILANO CENTRALE',
                'departure_time' => '2022-09-09 7:30',
                'arrival_time' => '2022-09-09 9:30',
                'train_code' => 9947,
                'number_of_coaches' => 10,
                'is_on_time' => true,
                'cancelled' => false,
            ],
            [ 
                'company' => 'Italo',
                'departure_station' => 'TORINO PORTA NUOVA',
                'arrival_station' => 'MILANO ROGOREDO',
                'departure_time' => '2022-09-09 07:45',
                'arrival_time' => '2022-09-09 9:50',
                'train_code' => 9989,
                'number_of_coaches' => 11,
                'is_on_time' => false,
                'cancelled' => false,
            ],
            [ 
                'company' => 'FrecciaRossa',
                'departure_station' => 'TORINO PORTA NUOVA',
                'arrival_station' => 'BATTIPAGLIA',
                'departure_time' => '2022-09-09 08:20',
                'arrival_time' => '2022-09-09 16:22',
                'train_code' => 8819,
                'number_of_coaches' => 10,
                'is_on_time' => true,
                'cancelled' => false,
            ],
            [ 
                'company' => 'FrecciaRossa',
                'departure_station' => 'TORINO PORTA NUOVA',
                'arrival_station' => 'ROMA TERMINI',
                'departure_time' => '2022-09-10 08:35',
                'arrival_time' => '2022-09-10 12:35',
                'train_code' => 9551,
                'number_of_coaches' => 11,
                'is_on_time' => true,
                'cancelled' => false,
            ],
            [ 
                'company' => 'Italo',
                'departure_station' => 'TORINO PORTA NUOVA',
                'arrival_station' => 'BARI CENTRALE',
                'departure_time' => '2022-09-10 09:45',
                'arrival_time' => '2022-09-10 17:43',
                'train_code' => 9384,
                'number_of_coaches' => 11,
                'is_on_time' => false,
                'cancelled' => true,
            ],
            [ 
                'company' => 'Italo',
                'departure_station' => 'TORINO PORTA NUOVA',
                'arrival_station' => 'BOLOGNA CENTRALE',
                'departure_time' => '2022-09-09 10:15',
                'arrival_time' => '2022-09-09 14:43',
                'train_code' => 9984,
                'number_of_coaches' => 9,
                'is_on_time' => false,
                'cancelled' => false,
            ],
            [ 
                'company' => 'FrecciaRossa',
                'departure_station' => 'TORINO PORTA NUOVA',
                'arrival_station' => 'REGGIO EMILIA AV MEDIOPADANA',
                'departure_time' => '2022-09-10 10:30',
                'arrival_time' => '2022-09-10 14:32',
                'train_code' => 9184,
                'number_of_coaches' => 11,
                'is_on_time' => true,
                'cancelled' => false,
            ],
            [ 
                'company' => 'FrecciaRossa',
                'departure_station' => 'TORINO PORTA NUOVA',
                'arrival_station' => 'FIRENZE S.M.',
                'departure_time' => '2022-09-09 10:35',
                'arrival_time' => ' 2022-09-09 16:41',
                'train_code' => 9157,
                'number_of_coaches' => 11,
                'is_on_time' => true,
                'cancelled' => false,
            ],
            [ 
                'company' => 'Italo',
                'departure_station' => 'TORINO PORTA NUOVA',
                'arrival_station' => 'SALERNO',
                'departure_time' => '2022-09-09 11:45',
                'arrival_time' => '2022-09-09 20:43',
                'train_code' => 9589,
                'number_of_coaches' => 11,
                'is_on_time' => false,
                'cancelled' => false,
            ],
            [ 
                'company' => 'Italo',
                'departure_station' => 'TORINO PORTA NUOVA',
                'arrival_station' => 'REGGIO CALABRIA',
                'departure_time' => '2022-09-10 12:00',
                'arrival_time' => '2022-09-10 22:05',
                'train_code' => 9963,
                'number_of_coaches' => 11,
                'is_on_time' => false,
                'cancelled' => true,
            ],
        ];

            foreach ($trains as $train) {
                $AddTrain = new Train();
                $AddTrain ->company = $train ['company'];
                $AddTrain ->departure_station = $train ['departure_station'];
                $AddTrain ->arrival_station = $train ['arrival_station'];
                $AddTrain ->departure_time = $train ['departure_time'];
                $AddTrain ->arrival_time = $train ['arrival_time'];
                $AddTrain ->train_code = $train ['train_code'];
                $AddTrain ->number_of_coaches = $train ['number_of_coaches'];
                $AddTrain ->is_on_time = $train ['is_on_time'];
                $AddTrain ->cancelled = $train ['cancelled'];
                $AddTrain ->save();
            }


    
        }
    }
