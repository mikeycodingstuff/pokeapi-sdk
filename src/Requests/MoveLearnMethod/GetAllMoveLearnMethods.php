<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveLearnMethod;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoveLearnMethods extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MOVE_LEARN_METHOD;
    }
}
