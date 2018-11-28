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
    public function testUpdateCarYear()
    {
        $car = Car::all()->last();
        $car-> where('id', '51')-> update(['year' => 2000]);
        $this->assertTrue($car->save());
        //dd($car);

    }

    public function testDeleteCar()
    {
        $car = Car::all()->last();
        $this->assertTrue($car->delete());
        //dd($car);
    }

    public function testCarsCount()
    {
        $cars = Car::all();
        $carsCount= count($cars);
        //$this->assertEquals(50,$carsCount);
        $this->assertInternalType('int',$carsCount);
        //dd($carsCount);
    }
    public function testCarYearDataType()
    {
        $car = Car::inRandomOrder() ->first();
        //dd($year);
        $year = (int) $car->Year;
        $this->assertInternalType('int',$year);

    }


}
