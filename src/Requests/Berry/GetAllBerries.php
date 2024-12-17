<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Berry;

use PokeApiSdk\Endpoints\Traits\BerryEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllBerries extends GetAllRequest
{
    use BerryEndpoint;
}
