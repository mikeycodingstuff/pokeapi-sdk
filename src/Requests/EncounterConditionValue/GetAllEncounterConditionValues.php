<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterConditionValue;

use PokeApiSdk\Endpoints\Traits\EncounterConditionValueEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllEncounterConditionValues extends GetAllRequest
{
    use EncounterConditionValueEndpoint;
}
