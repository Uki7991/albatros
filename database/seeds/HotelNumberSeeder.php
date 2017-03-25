<?php

use Illuminate\Database\Seeder;

class HotelNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $number = new App\HotelNumber();
        $number->name = "Одноместный номер";
        $number->save();

        $number = new App\HotelNumber();
        $number->name = "Двухместный номер с двумя кроватями";
        $number->save();

        $number = new App\HotelNumber();
        $number->name = "Двухместный номер с одной кроватью";
        $number->save();
    }
}
