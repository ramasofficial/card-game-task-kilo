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
    private const MONSTER = 'monster';

    private const SPELL = 'spell';

    private const TRAP = 'trap';


    public function build(string $type, array $data): CardInterface
    {
        switch ($type) {
            case self::MONSTER:
                $class = new Monster($data, new CardRepository());
                break;
            case self::SPELL:
                $class = new Spell($data, new CardRepository());
                break;
            case self::TRAP:
                $class = new Trap($data, new CardRepository());
                break;
            default:
                throw new CardTypeNotFoundException();
        }

        return $class;
    }
}
