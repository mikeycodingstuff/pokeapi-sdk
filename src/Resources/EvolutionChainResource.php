<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use Override;
use PokeApiSdk\Requests\EvolutionChain\GetAllEvolutionChains;
use PokeApiSdk\Requests\EvolutionChain\GetSingleEvolutionChain;

class EvolutionChainResource extends BaseResource
{
    #[Override]
    protected bool $getByIdOnly = false;

    protected function getAllRequestClass(): string
    {
        return GetAllEvolutionChains::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleEvolutionChain::class;
    }
}
