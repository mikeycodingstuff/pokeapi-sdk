<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Species\GetAllSpecies;
use PokeApiSdk\Requests\Species\GetSingleSpecies;

class SpeciesResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllSpecies::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleSpecies::class;
    }
}
