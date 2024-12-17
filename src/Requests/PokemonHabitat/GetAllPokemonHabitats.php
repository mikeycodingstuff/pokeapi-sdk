<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonHabitat;

use PokeApiSdk\Endpoints\Traits\PokemonHabitatEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPokemonHabitats extends GetAllRequest
{
    use PokemonHabitatEndpoint;

    public function __construct(protected ?int $limit = 10000)
    {
        parent::__construct($limit);
    }
}
