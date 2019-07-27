<?php

use Illuminate\Database\Seeder;

class car extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(car::class, 50)->create()->each(function ($car) {
            //$car->car()->save(factory(App\car::class)->make());
        });
    }
}
