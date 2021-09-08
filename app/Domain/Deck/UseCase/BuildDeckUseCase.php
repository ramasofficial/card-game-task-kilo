<?php

declare(strict_types=1);

namespace App\Domain\Deck\UseCase;

use App\Domain\Card\Repository\CardRepository;
use App\Domain\Deck\Factory\DeckFactory;
use App\Domain\PhysicalCard\Service\AddPhysicalCardToDeck;
use App\Models\Deck;

class BuildDeckUseCase
{
    /**
     * @var DeckFactory
     */
    private $deckFactory;
    /**
     * @var CardRepository
     */
    private $cardRepository;
    /**
     * @var AddPhysicalCardToDeck
     */
    private $addPhysicalCardToDeck;

    public function __construct(DeckFactory $deckFactory,
                                CardRepository $cardRepository,
                                AddPhysicalCardToDeck $addPhysicalCardToDeck)
    {
        $this->deckFactory = $deckFactory;
        $this->cardRepository = $cardRepository;
        $this->addPhysicalCardToDeck = $addPhysicalCardToDeck;
    }

    public function build(): Deck
    {
        $deck = $this->getDeck();
        $cards = $this->cardRepository->all();
        $this->addCardsToDeck($cards, $deck);
        return $deck;
    }

    private function getDeck(): Deck
    {
        $deck = $this->deckFactory->build();
        $deck->save();
        return $deck;
    }

    private function addCardsToDeck($cards, Deck $deck): void
    {
        foreach ($cards as $card) {
            $this->addPhysicalCardToDeck->add($deck, $card);
        }
    }
}
