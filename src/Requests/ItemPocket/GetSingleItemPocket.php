<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemPocket;

use PokeApiSdk\Endpoints\Traits\ItemPocketEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleItemPocket extends GetSingleRequest
{
    use ItemPocketEndpoint;
}
