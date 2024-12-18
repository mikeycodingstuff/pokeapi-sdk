<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveDamageClass;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleMoveDamageClass extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MOVE_DAMAGE_CLASS;
    }
}
