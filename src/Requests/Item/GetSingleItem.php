<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Item;

use PokeApiSdk\Endpoints\Traits\ItemEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleItem extends GetSingleRequest
{
    use ItemEndpoint;
}
