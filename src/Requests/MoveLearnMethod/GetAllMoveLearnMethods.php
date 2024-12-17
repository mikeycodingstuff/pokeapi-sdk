<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveLearnMethod;

use PokeApiSdk\Endpoints\Traits\MoveLearnMethodEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoveLearnMethods extends GetAllRequest
{
    use MoveLearnMethodEndpoint;
}
