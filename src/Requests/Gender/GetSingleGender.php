<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Gender;

use PokeApiSdk\Endpoints\Traits\GenderEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleGender extends GetSingleRequest
{
    use GenderEndpoint;
}
