<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveDamageClass;

use PokeApiSdk\Endpoints\Traits\MoveDamageClassEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleMoveDamageClass extends GetSingleRequest
{
    use MoveDamageClassEndpoint;
}
