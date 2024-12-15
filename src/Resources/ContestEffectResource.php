<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\ContestEffect\GetAllContestEffects;
use PokeApiSdk\Requests\ContestEffect\GetSingleContestEffect;

class ContestEffectResource extends BaseResource
{
    protected bool $allowString = false;

    protected function getAllRequestClass(): string
    {
        return GetAllContestEffects::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleContestEffect::class;
    }
}
