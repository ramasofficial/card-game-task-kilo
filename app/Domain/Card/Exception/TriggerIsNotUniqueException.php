<?php

declare(strict_types=1);

namespace App\Domain\Card\Exception;

class TriggerIsNotUniqueException extends \InvalidArgumentException
{
    private const ERROR_MESSAGE = 'Trigger must be unique!';

    public function __construct()
    {
        parent::__construct(self::ERROR_MESSAGE);
    }
}
