<?php
namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CountUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUsersCount()
    {
        $userCount = 50;
        $users = factory(User::class, 50 )->create();
        // Assert that the number of queries are below a certain point.
        $this->assertLessThanOrEqual( $userCount, \count( $users ) );
        $this->assertTrue(true);
    }
}