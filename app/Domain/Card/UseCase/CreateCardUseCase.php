<?php

declare(strict_types=1);

namespace App\Domain\Card\UseCase;

use App\Domain\Card\Factory\CardFactory;
use App\Domain\Card\Repository\CardRepository;
use App\Models\Card;

class CreateCardUseCase
{
    private CardFactory $cardFactory;

    private CardRepository $repository;

    public function __construct(CardFactory $cardFactory, CardRepository $repository)
    {
        $this->cardFactory = $cardFactory;
        $this->repository = $repository;
    }

    public function execute(string $type, array $data): void
    {
        $card = $this->cardFactory->build($type, $data);

        $this->repository->saveCard($card);
    }
}
