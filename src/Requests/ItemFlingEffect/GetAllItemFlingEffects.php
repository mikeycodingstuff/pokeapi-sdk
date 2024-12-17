<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemFlingEffect;

use PokeApiSdk\Endpoints\Traits\ItemFlingEffectEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllItemFlingEffects extends GetAllRequest
{
    use ItemFlingEffectEndpoint;
}
