<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Pokemon\GetAllPokemon;
use PokeApiSdk\Requests\Pokemon\GetSinglePokemon;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PokemonResource extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function all(?int $limit): Response
    {
        return $this->connector->send(new GetAllPokemon($limit));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function get(int|string $identifier): Response
    {
        return $this->connector->send(new GetSinglePokemon($identifier));
    }
}
