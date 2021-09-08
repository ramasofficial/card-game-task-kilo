<?php

declare(strict_types=1);

namespace App\Domain\PhysicalCard\Repository;

use App\Domain\PhysicalCard\Exception\PhysicalCardNotFoundException;
use App\Models\Deck;
use App\Models\PhysicalCard;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PhysicalCardRepository
{
    /**
     * @throws ModelNotFoundException
     */
    public function getRandomUndrawnOne(Deck $deck): PhysicalCard
    {
        try {
            return PhysicalCard::where('isDrawn', false)
                ->where('deck_id', $deck->id)
                ->inRandomOrder()->firstOrFail();
        } catch (ModelNotFoundException $e) {
            throw new PhysicalCardNotFoundException();
        }
    }
}
