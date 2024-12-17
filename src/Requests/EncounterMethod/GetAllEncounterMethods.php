<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterMethod;

use PokeApiSdk\Endpoints\Traits\EncounterMethodEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllEncounterMethods extends GetAllRequest
{
    use EncounterMethodEndpoint;
}
