<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemCategory;

use PokeApiSdk\Endpoints\Traits\ItemCategoryEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleItemCategory extends GetSingleRequest
{
    use ItemCategoryEndpoint;
}
