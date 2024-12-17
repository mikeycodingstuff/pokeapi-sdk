<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Move;

use PokeApiSdk\Endpoints\Traits\MoveEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleMove extends GetSingleRequest
{
    use MoveEndpoint;
}
