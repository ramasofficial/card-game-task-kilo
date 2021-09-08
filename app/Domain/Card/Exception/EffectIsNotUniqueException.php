<?php

declare(strict_types=1);

namespace App\Domain\Card\Exception;

class EffectIsNotUniqueException extends \InvalidArgumentException
{
    private const ERROR_MESSAGE = 'Effect must be unique!';

    public function __construct()
    {
        parent::__construct(self::ERROR_MESSAGE);
    }
}
