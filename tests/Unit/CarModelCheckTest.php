<?php
namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CheckCarModelTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModelType()
    {
        //just creating a new car or we can get from database too
        factory(Cars::class)->create();
        $car =  Cars::first();
        $this->assertInternalType("string", $car->model);
        $this->assertTrue(true);
    }
}