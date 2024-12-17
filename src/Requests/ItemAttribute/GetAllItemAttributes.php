<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemAttribute;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllItemAttributes extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'item-attribute';
    }
}
