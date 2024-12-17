<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemFlingEffect;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllItemFlingEffects extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'item-fling-effect';
    }
}
