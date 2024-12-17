<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemFlingEffect;

use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleItemFlingEffect extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return 'item-fling-effect';
    }
}
