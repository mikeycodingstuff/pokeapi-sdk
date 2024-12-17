<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveBattleStyle;

use PokeApiSdk\Endpoints\Traits\MoveBattleStyleEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoveBattleStyles extends GetAllRequest
{
    use MoveBattleStyleEndpoint;
}
