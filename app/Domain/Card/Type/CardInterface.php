<?php

declare(strict_types=1);

namespace App\Domain\Card\Type;

interface CardInterface
{
    public function getName(): string;

    public function getEffect(): ?string;

    public function getAttack();

    public function getDefense();

    public function getTrigger();

    public function getColor(): string;

    public function getType(): string;
}
