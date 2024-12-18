<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveCategory;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleMoveCategory extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MOVE_CATEGORY;
    }
}
