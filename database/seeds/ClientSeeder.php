<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Mary Daileen Bagsoling',
                'address' => 'Ubojan, Tubigon, Bohol',
                'phone' => '09507426126',
                'capitalization' => 1500.00,
                'loan' => 2000.00
            ],

            [
                'name' => 'Ivy Rose Waker',
                'address' => 'Ubojan, Tubigon, Bohol',
                'phone' => '09303402664',
                'capitalization' => 32000.00,
                'loan' => 1000.00
            ],

            [
                'name' => 'John Smith',
                'address' => 'Ubojan, Tubigon, Bohol',
                'phone' => '09857446345',
                'capitalization' => 4050.00,
                'loan' => 2000.00
            ],

        ];

        foreach($data as $client){
            \App\Client::create($client);
        }
    }
}
