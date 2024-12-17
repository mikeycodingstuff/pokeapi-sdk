<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemAttribute;

use PokeApiSdk\Endpoints\Traits\ItemAttributeEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleItemAttribute extends GetSingleRequest
{
    use ItemAttributeEndpoint;
}
