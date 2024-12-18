<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemCategory;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllItemCategories extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ITEM_CATEGORY;
    }
}
