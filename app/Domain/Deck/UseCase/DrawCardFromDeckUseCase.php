<?php

declare(strict_types=1);

namespace App\Domain\Deck\UseCase;

use App\Domain\Deck\Exception\EmptyDeckException;
use App\Domain\PhysicalCard\Exception\PhysicalCardNotFoundException;
use App\Domain\PhysicalCard\Repository\PhysicalCardRepository;
use App\Models\Deck;
use App\Models\PhysicalCard;

class DrawCardFromDeckUseCase
{
    /**
     * @var PhysicalCardRepository
     */
    private $physicalCardRepository;

    public function __construct(PhysicalCardRepository $physicalCardRepository)
    {
        $this->physicalCardRepository = $physicalCardRepository;
    }

    public function execute(Deck $deck): void
    {
        try {
            $card = $this->physicalCardRepository
                ->getRandomUndrawnOne($deck);
        } catch (PhysicalCardNotFoundException $e) {
            throw new EmptyDeckException();
        }

        $this->drawCard($card);
    }

    private function drawCard(PhysicalCard $card): void
    {
        $card->isDrawn = true;
        $card->save();
    }
}
