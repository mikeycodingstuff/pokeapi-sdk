<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EvolutionTrigger;

use PokeApiSdk\Endpoints\Traits\EvolutionTriggerEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleEvolutionTrigger extends GetSingleRequest
{
    use EvolutionTriggerEndpoint;
}
