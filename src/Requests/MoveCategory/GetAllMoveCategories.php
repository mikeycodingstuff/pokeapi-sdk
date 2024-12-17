<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveCategory;

use PokeApiSdk\Endpoints\Traits\MoveCategoryEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoveCategories extends GetAllRequest
{
    use MoveCategoryEndpoint;
}
