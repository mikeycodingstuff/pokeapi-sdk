<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\BerryFirmness;

use PokeApiSdk\Endpoints\Traits\BerryFirmnessEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleBerryFirmness extends GetSingleRequest
{
    use BerryFirmnessEndpoint;
}
