<?php

namespace App\Tests\Domain\User;


use App\Domain\User\User;
use App\Domain\User\ValueObject\Email;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class UserTest extends TestCase
{

    /**
     * @test
     */
    public function given_a_valid_email_it_should_create_a_user_instance()
    {
        $emailString = 'lol@aso.maximo';

        $user = User::create(Email::fromString($emailString));

        self::assertEquals($emailString, $user->email());
        self::assertNotNull($user->uuid());
    }
}
