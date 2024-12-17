<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EvolutionChain;

use PokeApiSdk\Endpoints\Traits\EvolutionChainEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllEvolutionChains extends GetAllRequest
{
    use EvolutionChainEndpoint;
}
