<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use Override;
use PokeApiSdk\Requests\Characteristic\GetAllCharacteristics;
use PokeApiSdk\Requests\Characteristic\GetSingleCharacteristic;

class CharacteristicResource extends BaseResource
{
    #[Override]
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
