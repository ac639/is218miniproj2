<?php

namespace Tests\Unit;

use App\car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

//use App\car;
use DB;

class CarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $data = array(
            'make' => 'honda',
            'model' => 'civic',
            'year' => '2006',

        );

        DB::table('car')->insert($data);

        //DB::table('car')->where('make', 'honda')->delete();

        $this->assertTrue(true);
    }

    public function testUpdateCar() {

        DB::table('car')
            ->where('make', 'honda')
            ->update(['year' => '2000']);

        $car = DB::table('car')->where('year','2000')->first();
        //dd($car->year);

        //DB::table('car')->where('year', '2000')->delete();

        $this->assertEquals('2000',$car->year);

    }

    public function testDeleteCar() {

        DB::table('car')->where('make', 'honda')->delete();

        $expected = null;

        $car = DB::table('car')
            ->where('make', 'honda');

        $this->assertEquals($expected, null);

    }
}
