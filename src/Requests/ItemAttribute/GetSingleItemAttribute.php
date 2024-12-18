<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemAttribute;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleItemAttribute extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ITEM_ATTRIBUTE;
    }
}
