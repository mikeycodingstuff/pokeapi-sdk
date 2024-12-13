<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Pokedex\GetAllPokedexes;
use PokeApiSdk\Requests\Pokedex\GetSinglePokedex;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PokedexResource extends BaseResource
{
    public function all(): Response
    {
        return $this->connector->send(new GetAllPokedexes);
    }

    public function get(int|string $identifier): Response
    {
        return $this->connector->send(new GetSinglePokedex($identifier));
    }
}
