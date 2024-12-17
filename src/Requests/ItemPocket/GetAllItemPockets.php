<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemPocket;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllItemPockets extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'item-pocket';
    }
}
