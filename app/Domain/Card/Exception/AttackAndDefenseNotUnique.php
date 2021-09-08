<?php

declare(strict_types=1);

namespace App\Domain\Card\Exception;

class AttackAndDefenseNotUnique extends \InvalidArgumentException
{
    private const ERROR_MESSAGE = 'Attack and defense must be unique!';

    public function __construct()
    {
        parent::__construct(self::ERROR_MESSAGE);
    }
}
