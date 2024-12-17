<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterMethod;

use PokeApiSdk\Endpoints\Traits\EncounterMethodEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleEncounterMethod extends GetSingleRequest
{
    use EncounterMethodEndpoint;
}
