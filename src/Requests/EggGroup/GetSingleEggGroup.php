<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EggGroup;

use PokeApiSdk\Endpoints\Traits\EggGroupEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleEggGroup extends GetSingleRequest
{
    use EggGroupEndpoint;
}
