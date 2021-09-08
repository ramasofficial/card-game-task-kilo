<?php

declare(strict_types=1);

namespace App\Domain\Card\Type;

abstract class Card implements CardInterface
{
    private const DEFAULT_COLOR = 'red';

    private string $name;

    private ?string $effect;

    public function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->effect = $data['effect'];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEffect(): ?string
    {
        return $this->effect;
    }

    public function getAttack()
    {
        return null;
    }

    public function getDefense()
    {
        return null;
    }

    public function getTrigger()
    {
        return null;
    }

    abstract public function getColor(): string;

    abstract public function getType(): string;
}
