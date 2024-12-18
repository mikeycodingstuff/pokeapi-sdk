<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Move;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoves extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MOVE;
    }
}
