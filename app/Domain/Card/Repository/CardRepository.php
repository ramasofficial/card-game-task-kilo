<?php

declare(strict_types=1);

namespace App\Domain\Card\Repository;


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
}
