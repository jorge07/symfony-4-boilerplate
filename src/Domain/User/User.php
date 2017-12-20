<?php

declare(strict_types=1);

namespace App\Domain\User;

use App\Domain\User\ValueObject\Email;
use Ramsey\Uuid\Uuid;

class User
{
    public static function create(Email $email): self
    {
        $user = new self;

        $user->uuid = Uuid::uuid4();

        $user->setEmail($email);

        return $user;
    }

    public function email(): string
    {
        return $this->email->toString();
    }

    public function uuid(): string
    {
        return $this->uuid->toString();
    }

    private function __construct()
    {
    }

    private function setEmail(Email $email): void
    {
        $this->email = $email;
    }

    /** @var Uuid */
    private $uuid;

    /** @var Email */
    private $email;
}
