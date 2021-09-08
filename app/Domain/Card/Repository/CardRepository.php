<?php

declare(strict_types=1);

namespace App\Domain\Card\Repository;


use App\Domain\Card\Type\CardInterface;
use App\Models\Card;
use Illuminate\Database\Eloquent\Collection;

class CardRepository
{
    /**
     * @return Collection|Card[]
     */
    public function all(): Collection
    {
        return Card::all();
    }

    public function isUnique(string $type, string $value, string $field): int
    {
        return Card::where('type', $type)->where($field, $value)->count();
    }

    public function saveCard(CardInterface $card): void
    {
        Card::create([
            'name' => $card->getName(),
            'type' => $card->getType(),
            'effect' => $card->getEffect(),
            'attack' => $card->getAttack(),
            'defense' => $card->getDefense(),
            'color' => $card->getColor(),
            'trigger' => $card->getTrigger(),
        ]);
    }
}
