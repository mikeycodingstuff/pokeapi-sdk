<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Generation\GetAllGenerations;
use PokeApiSdk\Requests\Generation\GetSingleGeneration;

class GenerationResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllGenerations::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleGeneration::class;
    }
}
