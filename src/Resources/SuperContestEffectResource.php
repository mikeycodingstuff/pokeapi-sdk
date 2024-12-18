<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\SuperContestEffect\GetAllSuperContestEffects;
use PokeApiSdk\Requests\SuperContestEffect\GetSingleSuperContestEffect;

class SuperContestEffectResource extends BaseResource
{
    protected bool $getByIdOnly = false;

    protected function getAllRequestClass(): string
    {
        return GetAllSuperContestEffects::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleSuperContestEffect::class;
    }
}
