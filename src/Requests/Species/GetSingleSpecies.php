<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Species;

use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleSpecies extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return 'pokemon-species';
    }
}
