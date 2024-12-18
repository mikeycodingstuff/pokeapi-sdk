<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveAilment;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoveAilments extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MOVE_AILMENT;
    }
}
