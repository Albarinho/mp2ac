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
/*
    public function testInsertUser()
    {
        $user = new User();
        $user->name ='John Cena';
        $user->email ='youcantCme@gmail.com';
        $user->password='123456';
        $this->assertTrue($user->save());
    }*/
//commented because everytime phpunit is run a new user will be created, not needed after the first test.


    public function testUpdateUserName()
    {
        $user = User::all()->last();
        $user-> where('name', 'John Cena') -> update(['name' => 'Steve Smith']);
        $this->assertTrue($user->save());
    }





}
