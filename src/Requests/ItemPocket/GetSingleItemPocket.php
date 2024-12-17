<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemPocket;

use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleItemPocket extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return 'item-pocket';
    }
}
