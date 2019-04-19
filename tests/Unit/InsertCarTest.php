<?php
namespace Tests\Unit;
use App\Cars;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $data =  [
            'make' => 'honda',
            'model' => 'Test Model',
            'year' => Carbon::now()->year,
        ];
        $cars = Cars::create($data);
        $this->assertInstanceOf(Cars::class, $cars);
        $this->assertEquals($data['make'], $cars->make);
        $this->assertEquals($data['model'], $cars->model);
        $this->assertEquals($data['year'], $cars->year);
        $this->assertTrue(true);
    }
}