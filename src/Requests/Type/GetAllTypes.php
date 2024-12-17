<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Type;

use PokeApiSdk\Endpoints\Traits\TypeEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllTypes extends GetAllRequest
{
    use TypeEndpoint;
}
