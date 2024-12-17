<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Species;

use PokeApiSdk\Endpoints\Traits\SpeciesEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllSpecies extends GetAllRequest
{
    use SpeciesEndpoint;
}
