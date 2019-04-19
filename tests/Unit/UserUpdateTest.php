<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserUpdateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUpdateUser()
    {
        $data['name'] = 'Steve Smith';
        $user = User::first();
        $user->update($data);
        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($data['name'], $user->name);
        $this->assertTrue(true);
    }
}
