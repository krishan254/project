<?php

namespace Tests\Unit;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_find_users_by_their_username()
    {
        $createdUser = factory(User::class)->create(['username'=>'kim']);
        $foundUser = User::findByUsername('kim');
        $this->assertEquals($createdUser->id,$foundUser->id);
        $this->assertEquals('kim',$foundUser->username);
    }
}
