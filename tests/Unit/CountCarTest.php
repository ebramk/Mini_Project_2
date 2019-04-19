<?php
namespace Tests\Unit;
use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CountCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountCarsIs50()
    {
        $carCount = 50;
        $cars = factory(Cars::class, 50 )->create();
        // Assert that the number of queries are below a certain point.
        $this->assertLessThanOrEqual( $carCount, \count( $cars ) );
        $this->assertTrue(true);
    }
}