<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonShape;

use PokeApiSdk\Endpoints\Traits\PokemonShapeEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPokemonShapes extends GetAllRequest
{
    use PokemonShapeEndpoint;

    public function __construct(protected ?int $limit = 10000)
    {
        parent::__construct($limit);
    }
}
