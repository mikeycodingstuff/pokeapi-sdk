<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\GetAllPokemon;
use PokeApiSdk\Requests\GetSinglePokemon;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PokemonResource extends BaseResource
{
    public function all(): Response
    {
        return $this->connector->send(new GetAllPokemon);
    }

    public function get(int|string $identifier): Response
    {
        return $this->connector->send(new GetSinglePokemon($identifier));
    }
}
