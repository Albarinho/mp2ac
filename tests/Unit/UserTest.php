<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testInsertUser()
    {
        $user = new User();
        $user->name ='John Cena';
        $user->email ='youcantCme';
        $user->password='123456';
        $this->assertTrue($user->save());
    }
}
