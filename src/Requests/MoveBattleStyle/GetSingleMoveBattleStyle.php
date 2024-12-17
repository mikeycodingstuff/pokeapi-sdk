<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveBattleStyle;

use PokeApiSdk\Endpoints\Traits\MoveBattleStyleEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleMoveBattleStyle extends GetSingleRequest
{
    use MoveBattleStyleEndpoint;
}
