<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Ability;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleAbility extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ABILITY;
    }
}
