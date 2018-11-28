<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = new Car();
        $car->make = "Tesla";
        $car->model= "S9";
        $car->year= 2019;
        $this->assertTrue($car->save());
        $this->assertInternalType('int',$car->year);
    }

}
