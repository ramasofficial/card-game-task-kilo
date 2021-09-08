<?php

declare(strict_types=1);

namespace App\Domain\Card\Type;

use App\Domain\Card\Exception\EffectIsEmptyException;
use App\Domain\Card\Exception\EffectIsNotUniqueException;
use App\Domain\Card\Repository\CardRepository;
use App\Domain\Card\Validator\CardValidator;

class Spell extends Card
{
    private const COLOR = 'yellow';

    public const TYPE = 'spell';

    private string $color;

    private CardRepository $repository;

    private CardValidator $validator;

    public function __construct(array $data, CardRepository $repository)
    {
        $this->color = self::COLOR;
        $this->repository = $repository;
        $this->validator = new CardValidator();

        if(!$this->validator->has($data, 'effect')) {
            throw new EffectIsEmptyException();
        }

        if(!$this->validator->isUnique($this->repository, self::TYPE, $data['effect'], 'effect')) {
            throw new EffectIsNotUniqueException();
        }

        parent::__construct($data);
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getType(): string
    {
        return self::TYPE;
    }
}
