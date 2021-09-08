<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Deck\UseCase\DrawCardFromDeckUseCase;
use App\Models\Deck;
use Illuminate\Http\JsonResponse;

class DrawCardController
{
    /**
     * @var DrawCardFromDeckUseCase
     */
    private $useCase;

    public function __construct(DrawCardFromDeckUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    public function draw(Deck $deck): JsonResponse
    {
        $this->useCase->execute($deck);
        $deck->cards;
        return new JsonResponse(
            $deck
        );
    }
}
