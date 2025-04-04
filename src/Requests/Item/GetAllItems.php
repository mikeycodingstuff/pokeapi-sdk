<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Item;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllItems extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ITEM;
    }
}
