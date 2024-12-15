<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\EncounterMethod\GetAllEncounterMethods;
use PokeApiSdk\Requests\EncounterMethod\GetSingleEncounterMethod;

class EncounterMethodResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllEncounterMethods::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleEncounterMethod::class;
    }
}
