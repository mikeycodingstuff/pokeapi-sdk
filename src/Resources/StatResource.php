<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Stat\GetAllStats;
use PokeApiSdk\Requests\Stat\GetSingleStat;

class StatResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllStats::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleStat::class;
    }
}
