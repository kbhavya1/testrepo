<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tickets')->insert([
            'id' => '5',
            'catagory' => 'Different',
            'price' => '7000',
            'type' => 'NRI',
        ]);


    }
}
