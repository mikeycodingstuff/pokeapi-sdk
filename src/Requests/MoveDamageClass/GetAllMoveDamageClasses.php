<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveDamageClass;

use PokeApiSdk\Endpoints\Traits\MoveDamageClassEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoveDamageClasses extends GetAllRequest
{
    use MoveDamageClassEndpoint;
}
