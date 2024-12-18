<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Stat;

use PokeApiSdk\Endpoints\Traits\StatEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllStats extends GetAllRequest
{
    use StatEndpoint;
}
