<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Item;

use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleItem extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return 'item';
    }
}
