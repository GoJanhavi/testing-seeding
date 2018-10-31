<?php

namespace Tests\Unit;
use App\Car;
use phpDocumentor\Reflection\Types\Integer;
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
            'year' => 2018,
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

    public function testCarRecordCount(){
        $car = Car::all();
        $carCount = 50;
        $this->assertCount($carCount, $car);
    }

    public function testDataType()
    {
        $car = Car::inRandomOrder()->first();
        $carInt = (int)$car->year;
        $this->assertInternalType('int',$carInt);
    }

    public function testCarMake(){
        $car = Car::inRandomOrder()->first();
        $this->assertContains($car->make, ['Ford','Honda','Toyota']);
    }

    public function testModelDataType()
    {
        $carModel = Car::inRandomOrder()->first()->model;
        $this->assertInternalType('string',$carModel);
    }
}
