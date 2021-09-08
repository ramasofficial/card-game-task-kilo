<?php

declare(strict_types=1);

namespace App\Domain\Card\Exception;

class EffectIsEmptyException extends \InvalidArgumentException
{
    private const ERROR_MESSAGE = 'Card must have a effect!';

    public function __construct()
    {
        parent::__construct(self::ERROR_MESSAGE);
    }
}
