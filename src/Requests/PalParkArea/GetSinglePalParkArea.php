<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PalParkArea;

use PokeApiSdk\Endpoints\Traits\PalParkAreaEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePalParkArea extends GetSingleRequest
{
    use PalParkAreaEndpoint;
}
