<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveLearnMethod;

use PokeApiSdk\Endpoints\Traits\MoveLearnMethodEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleMoveLearnMethod extends GetSingleRequest
{
    use MoveLearnMethodEndpoint;
}
