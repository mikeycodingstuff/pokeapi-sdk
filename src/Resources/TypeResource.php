<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Type\GetAllTypes;
use PokeApiSdk\Requests\Type\GetSingleType;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class TypeResource extends BaseResource
{
    public function all(): Response
    {
        return $this->connector->send(new GetAllTypes);
    }

    public function get(int|string $identifier): Response
    {
        return $this->connector->send(new GetSingleType($identifier));
    }
}
