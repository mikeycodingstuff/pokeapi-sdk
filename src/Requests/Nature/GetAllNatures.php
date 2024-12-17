<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Nature;

use PokeApiSdk\Endpoints\Traits\NatureEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllNatures extends GetAllRequest
{
    use NatureEndpoint;
}
