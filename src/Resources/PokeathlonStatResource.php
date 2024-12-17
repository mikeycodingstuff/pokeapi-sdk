<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\PokeathlonStat\GetAllPokeathlonStats;
use PokeApiSdk\Requests\PokeathlonStat\GetSinglePokeathlonStat;

class PokeathlonStatResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllPokeathlonStats::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSinglePokeathlonStat::class;
    }
}
