<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\EncounterConditionValue\GetAllEncounterConditionValues;
use PokeApiSdk\Requests\EncounterConditionValue\GetSingleEncounterConditionValue;

class EncounterConditionValueResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllEncounterConditionValues::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleEncounterConditionValue::class;
    }
}
