<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\LocationArea;

use PokeApiSdk\Endpoints\Traits\LocationAreaEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleLocationArea extends GetSingleRequest
{
    use LocationAreaEndpoint;
}
