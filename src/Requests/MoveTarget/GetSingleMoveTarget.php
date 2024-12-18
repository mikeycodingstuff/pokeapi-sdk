<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveTarget;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleMoveTarget extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MOVE_TARGET;
    }
}
