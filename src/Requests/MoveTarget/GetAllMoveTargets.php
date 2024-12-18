<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveTarget;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoveTargets extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MOVE_TARGET;
    }
}
