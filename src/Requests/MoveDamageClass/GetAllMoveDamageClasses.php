<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveDamageClass;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoveDamageClasses extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MOVE_DAMAGE_CLASS;
    }
}
