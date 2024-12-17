<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Characteristic\GetAllCharacteristics;
use PokeApiSdk\Requests\Characteristic\GetSingleCharacteristic;

class CharacteristicResource extends BaseResource
{
    protected bool $getByIdOnly = false;

    protected function getAllRequestClass(): string
    {
        return GetAllCharacteristics::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleCharacteristic::class;
    }
}
