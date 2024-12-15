<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EvolutionChain;

use PokeApiSdk\Requests\Base\GetByIdOnlySingleRequest;

class GetSingleEvolutionChain extends GetByIdOnlySingleRequest
{
    protected function endpointName(): string
    {
        return 'evolution-chain';
    }
}
