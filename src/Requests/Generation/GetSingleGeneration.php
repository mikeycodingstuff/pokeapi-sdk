<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Generation;

use PokeApiSdk\Endpoints\Traits\GenerationEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleGeneration extends GetSingleRequest
{
    use GenerationEndpoint;
}
