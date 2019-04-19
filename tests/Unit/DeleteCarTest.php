<?php
namespace Tests\Unit;
use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCar()
    {
        $cars = Cars::first();
        if($cars)
            $cars->delete();
        $this->assertTrue(true);
    }
}