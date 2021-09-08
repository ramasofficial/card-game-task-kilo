<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Domain\Card\UseCase\CreateCardUseCase;
use App\Http\Requests\StoreCardRequest;
use App\Models\Card;
use Illuminate\Http\Response;

class CardController
{
    /**
     * @var CreateCardUseCase
     */
    private $useCase;

    public function __construct(CreateCardUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    public function index(): Response
    {
        return new Response(
            Card::all(),
        );
    }

    public function store(StoreCardRequest $request, string $type)
    {
        $this->useCase->execute($type, $request->all(['name', 'effect', 'attack', 'defense', 'trigger']));

        return response()->json([
            'success' => true
        ]);
    }
}
