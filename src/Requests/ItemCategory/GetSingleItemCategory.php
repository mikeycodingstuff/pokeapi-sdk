<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemCategory;

use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleItemCategory extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return 'item-category';
    }
}
