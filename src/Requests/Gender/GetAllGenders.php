<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Gender;

use PokeApiSdk\Endpoints\Traits\GenderEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllGenders extends GetAllRequest
{
    use GenderEndpoint;
}
