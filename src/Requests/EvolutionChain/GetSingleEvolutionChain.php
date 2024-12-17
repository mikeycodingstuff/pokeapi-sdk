<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EvolutionChain;

use PokeApiSdk\Endpoints\Traits\EvolutionChainEndpoint;
use PokeApiSdk\Requests\Base\GetByIdOnlySingleRequest;

class GetSingleEvolutionChain extends GetByIdOnlySingleRequest
{
    use EvolutionChainEndpoint;
}
