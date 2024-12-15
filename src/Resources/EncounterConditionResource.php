<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\EncounterCondition\GetAllEncounterConditions;
use PokeApiSdk\Requests\EncounterCondition\GetSingleEncounterCondition;

class EncounterConditionResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllEncounterConditions::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleEncounterCondition::class;
    }
}
