<?php

declare(strict_types=1);

namespace App\Domain\Card\Exception;

class CardTypeNotFoundException extends \InvalidArgumentException
{
    private const ERROR_MESSAGE = 'Card type does not exist!';

    public function __construct()
    {
        parent::__construct(self::ERROR_MESSAGE);
    }
}
