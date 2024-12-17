<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Move;

use PokeApiSdk\Endpoints\Traits\MoveEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoves extends GetAllRequest
{
    use MoveEndpoint;
}
