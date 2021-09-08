<?php

declare(strict_types=1);

namespace App\Domain\Card\Validator;

use App\Domain\Card\Repository\CardRepository;

class CardValidator
{
    public function isUnique(CardRepository $repository, string $type, string $value, string $field): bool
    {
        return !($repository->isUnique($type, $value, $field) > 0);
    }

    public function has(array $data, string $field): bool
    {
        return isset($data[$field]);
    }
}
