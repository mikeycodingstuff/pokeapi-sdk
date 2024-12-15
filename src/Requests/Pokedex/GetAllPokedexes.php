<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Pokedex;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPokedexes extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'pokedex';
    }
}
