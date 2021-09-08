<?php

declare(strict_types=1);

namespace App\Domain\Card\Exception;

class DefenseIsEmptyException extends \InvalidArgumentException
{
    private const ERROR_MESSAGE = 'Card must have defense!';

    public function __construct()
    {
        parent::__construct(self::ERROR_MESSAGE);
    }
}
