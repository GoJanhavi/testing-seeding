<?php

namespace Tests\Unit;
use App\Car;
use function Sodium\increment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = factory(Car::class)->create([
            'make' => 'Ford',
            'model' => 'Mustang',
            'year' => '2018',
        ]);
        $this->assertInstanceOf('App\Car', $car);
    }

    public function testUpdateCarEntry(){
        $car= Car::find(1);
        $car->year = 2000;
        $car->save();
        $updatedCar = Car::find(1);
        $this->assertEquals($updatedCar->year, 2000);
    }

    public function testDeleteCarEntry(){
        $car= Car::find(1);
        $this->assertTrue($car->delete());
    }
}
