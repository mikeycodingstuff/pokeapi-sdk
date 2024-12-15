<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Species;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllSpecies extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'pokemon-species';
    }
}
