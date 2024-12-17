<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EvolutionTrigger;

use PokeApiSdk\Endpoints\Traits\EvolutionTriggerEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllEvolutionTriggers extends GetAllRequest
{
    use EvolutionTriggerEndpoint;
}
