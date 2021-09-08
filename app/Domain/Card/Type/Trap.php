<?php

declare(strict_types=1);

namespace App\Domain\Card\Type;

use App\Domain\Card\Exception\EffectIsEmptyException;
use App\Domain\Card\Exception\EffectIsNotUniqueException;
use App\Domain\Card\Exception\TriggerIsEmptyException;
use App\Domain\Card\Exception\TriggerIsNotUniqueException;
use App\Domain\Card\Repository\CardRepository;
use App\Domain\Card\Validator\CardValidator;

class Trap extends Card
{
    private const COLOR = 'black';

    private const TYPE = 'trap';

    private string $color;

    private CardRepository $repository;

    private string $trigger;

    private CardValidator $validator;

    public function __construct(array $data, CardRepository $repository)
    {
        $this->color = self::COLOR;
        $this->repository = $repository;
        $this->validator = new CardValidator();

        if(!$this->validator->has($data, 'effect')) {
            throw new EffectIsEmptyException();
        }

        if(!$this->validator->isUnique($this->repository,self::TYPE, $data['effect'], 'effect')) {
            throw new EffectIsNotUniqueException();
        }

        if(!$this->validator->has($data, 'trigger')) {
            throw new TriggerIsEmptyException();
        }

        if(!$this->validator->isUnique($this->repository,self::TYPE, $data['trigger'], 'trigger')) {
            throw new TriggerIsNotUniqueException();
        }

        $this->trigger = $data['trigger'];

        parent::__construct($data);
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getTrigger(): string
    {
        return $this->trigger;
    }

    public function getType(): string
    {
        return self::TYPE;
    }
}
