<?php

declare(strict_types=1);

namespace App\Domain\PhysicalCard\Service;

use App\Models\Card;
use App\Models\Deck;
use App\Models\PhysicalCard;

class AddPhysicalCardToDeck
{
    public function add(Deck $deck, Card $card): PhysicalCard
    {
        $physicalCard = new PhysicalCard();
        $physicalCard->deck_id = $deck->id;
        $physicalCard->card_id = $card->id;
        $physicalCard->isDrawn = false;
        $physicalCard->save();
        return $physicalCard;
    }
}
