<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveTarget;

use PokeApiSdk\Endpoints\Traits\MoveTargetEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleMoveTarget extends GetSingleRequest
{
    use MoveTargetEndpoint;
}
