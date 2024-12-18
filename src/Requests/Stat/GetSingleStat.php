<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Stat;

use PokeApiSdk\Endpoints\Traits\StatEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleStat extends GetSingleRequest
{
    use StatEndpoint;
}
