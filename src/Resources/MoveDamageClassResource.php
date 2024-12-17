<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\MoveDamageClass\GetAllMoveDamageClasses;
use PokeApiSdk\Requests\MoveDamageClass\GetSingleMoveDamageClass;

class MoveDamageClassResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllMoveDamageClasses::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleMoveDamageClass::class;
    }
}
