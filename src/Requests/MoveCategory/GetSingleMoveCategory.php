<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveCategory;

use PokeApiSdk\Endpoints\Traits\MoveCategoryEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleMoveCategory extends GetSingleRequest
{
    use MoveCategoryEndpoint;
}
