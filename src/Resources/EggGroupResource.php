<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\EggGroup\GetAllEggGroups;
use PokeApiSdk\Requests\EggGroup\GetSingleEggGroup;

class EggGroupResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllEggGroups::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleEggGroup::class;
    }
}
