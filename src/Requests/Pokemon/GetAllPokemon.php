<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Pokemon;

use PokeApiSdk\Endpoints\Traits\PokemonEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPokemon extends GetAllRequest
{
    use PokemonEndpoint;

    public function __construct(protected ?int $limit = 10000)
    {
        parent::__construct($limit);
    }
}
