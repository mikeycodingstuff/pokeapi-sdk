<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemFlingEffect;

use PokeApiSdk\Endpoints\Traits\ItemFlingEffectEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleItemFlingEffect extends GetSingleRequest
{
    use ItemFlingEffectEndpoint;
}
