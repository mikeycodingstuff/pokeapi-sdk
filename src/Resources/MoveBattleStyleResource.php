<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\MoveBattleStyle\GetAllMoveBattleStyles;
use PokeApiSdk\Requests\MoveBattleStyle\GetSingleMoveBattleStyle;

class MoveBattleStyleResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllMoveBattleStyles::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleMoveBattleStyle::class;
    }
}
