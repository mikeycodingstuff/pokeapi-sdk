<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Generation\GetAllGenerations;
use PokeApiSdk\Requests\Generation\GetSingleGeneration;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GenerationResource extends BaseResource
{
    public function all(): Response
    {
        return $this->connector->send(new GetAllGenerations);
    }

    public function get(int|string $identifier): Response
    {
        return $this->connector->send(new GetSingleGeneration($identifier));
    }
}
