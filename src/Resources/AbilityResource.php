<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Ability\GetAllAbilities;
use PokeApiSdk\Requests\Ability\GetSingleAbility;

class AbilityResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllAbilities::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleAbility::class;
    }
}
