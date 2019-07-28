<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Car;
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

        DB::table('car')->where('make', 'honda')->delete();

        $this->assertTrue(true);
    }
}
