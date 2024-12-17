<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\BerryFirmness;

use PokeApiSdk\Endpoints\Traits\BerryFirmnessEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllBerryFirmnesses extends GetAllRequest
{
    use BerryFirmnessEndpoint;
}
