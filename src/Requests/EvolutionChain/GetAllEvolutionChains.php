<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EvolutionChain;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllEvolutionChains extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'evolution-chain';
    }
}
