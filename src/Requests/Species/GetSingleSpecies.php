<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Species;

use PokeApiSdk\Endpoints\Traits\SpeciesEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleSpecies extends GetSingleRequest
{
    use SpeciesEndpoint;
}
