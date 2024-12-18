<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemCategory;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleItemCategory extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ITEM_CATEGORY;
    }
}
