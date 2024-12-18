<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonForm;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePokemonForm extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::POKEMON_FORM;
    }
}
