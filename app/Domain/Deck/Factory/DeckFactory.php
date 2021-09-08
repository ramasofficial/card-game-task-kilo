<?php

declare(strict_types=1);

namespace App\Domain\Deck\Factory;

use App\Models\Deck;

class DeckFactory
{
    public function build(): Deck
    {
        return new Deck();
    }
}
