<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\EvolutionTrigger\GetAllEvolutionTriggers;
use PokeApiSdk\Requests\EvolutionTrigger\GetSingleEvolutionTrigger;

class EvolutionTriggerResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllEvolutionTriggers::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleEvolutionTrigger::class;
    }
}
