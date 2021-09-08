<?php

declare(strict_types=1);

namespace App\Domain\Card\Factory;

use App\Domain\Card\Exception\CardTypeNotFoundException;
use App\Domain\Card\Repository\CardRepository;
use App\Domain\Card\Type\CardInterface;
use App\Domain\Card\Type\Monster;
use App\Domain\Card\Type\Spell;
use App\Domain\Card\Type\Trap;

class CardFactory
{
    public function build(string $type, array $data): CardInterface
    {
        switch ($type) {
            case Monster::TYPE:
                $class = new Monster($data, new CardRepository());
                break;
            case Spell::TYPE:
                $class = new Spell($data, new CardRepository());
                break;
            case Trap::TYPE:
                $class = new Trap($data, new CardRepository());
                break;
            default:
                throw new CardTypeNotFoundException();
        }

        return $class;
    }
}
