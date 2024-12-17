<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveAilment;

use PokeApiSdk\Endpoints\Traits\MoveAilmentEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoveAilments extends GetAllRequest
{
    use MoveAilmentEndpoint;
}
