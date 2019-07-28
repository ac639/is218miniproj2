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
            'model' => 'pilot',
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

        DB::table('car')->where('model', 'pilot')->delete();

        $expected = null;

        $car = DB::table('car')
            ->where('model', 'pilot');

        $this->assertEquals($expected, null);

    }

    public function testCountCarTable() {
        //Check countcar table count

        $count = DB::table('car')->count();

        $this->assertEquals(50,$count);

    }

    public function testIsInteger() {
        $car = DB::table('car')->where('year','2012')->first();
        $car2 = (int)$car->year;
        //dd($car2);

        $this->assertIsInt($car2);
    }

    public function testCarMake() {

        $car = DB::table('car')->where('make','toyota')->first();
        $carMake = $car->make;

        if ($carMake === "honda") {
            $this->assertTrue(true);
        } else if ($carMake === "toyota") {
            $this->assertTrue(true);
        } else if ($carMake === "ford") {
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }


    }

    public function testIsString() {
        $car = DB::table('car')->where('model','civic')->first();
        $carModel = $car->model;

        $this->assertIsString($carModel);
    }


}
