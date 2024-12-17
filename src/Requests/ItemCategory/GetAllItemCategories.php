<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemCategory;

use PokeApiSdk\Endpoints\Traits\ItemCategoryEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllItemCategories extends GetAllRequest
{
    use ItemCategoryEndpoint;
}
