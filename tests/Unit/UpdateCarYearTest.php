<?php
namespace Tests\Unit;
use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class UpdateCarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCarYear()
    {
        $data['year'] = '2000';
        $user = Cars::first();
        $user->update($data);
        $this->assertInstanceOf(Cars::class, $user);
        $this->assertEquals($data['year'], $user->year);
        $this->assertTrue(true);
    }
}