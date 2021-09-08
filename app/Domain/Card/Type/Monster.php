<?php

declare(strict_types=1);

namespace App\Domain\Card\Type;

use App\Domain\Card\Exception\AttackAndDefenseNotUnique;
use App\Domain\Card\Exception\AttackIsEmptyException;
use App\Domain\Card\Exception\DefenseIsEmptyException;
use App\Domain\Card\Repository\CardRepository;
use App\Domain\Card\Validator\CardValidator;

class Monster extends Card
{
    private const COLOR = 'green';

    private const TYPE = 'monster';

    private string $color;

    private int $attack;

    private int $defense;

    private CardValidator $validator;

    private CardRepository $repository;

    public function __construct(array $data, CardRepository $repository)
    {
        parent::__construct($data);

        $this->color = self::COLOR;
        $this->repository = $repository;
        $this->validator = new CardValidator();

        if(!$this->validator->has($data, 'attack')) {
            throw new AttackIsEmptyException();
        }

        if(!$this->validator->has($data, 'defense')) {
            throw new DefenseIsEmptyException();
        }

        if(!$this->validator->isUnique($this->repository, self::TYPE, $data['attack'], 'attack') && !$this->validator->isUnique($this->repository, self::TYPE, $data['defense'], 'defense')) {
            throw new AttackAndDefenseNotUnique();
        }

        $this->attack = (int) $data['attack'];
        $this->defense = (int) $data['defense'];
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function getDefense(): int
    {
        return $this->defense;
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
