<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /**
     * @test
     */
    public function create_primary_user()
    {
    create_primary_user();

    User::where('email','mohamedelatfi@gmail.com')->first();

    $this->assertEquals($user->name, 'Mohamed Elatfi');
    $this->assertEquals($user->email, 'mohamedelatfi@gmail.com');
    $this->assertEquals($user->password, 'PRYMARY_USER_PASSWORD','123456');
    }
}
