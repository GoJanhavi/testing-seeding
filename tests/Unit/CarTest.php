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
}
