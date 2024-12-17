<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemPocket;

use PokeApiSdk\Endpoints\Traits\ItemPocketEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllItemPockets extends GetAllRequest
{
    use ItemPocketEndpoint;
}
