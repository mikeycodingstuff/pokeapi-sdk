<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveTarget;

use PokeApiSdk\Endpoints\Traits\MoveTargetEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoveTargets extends GetAllRequest
{
    use MoveTargetEndpoint;
}
