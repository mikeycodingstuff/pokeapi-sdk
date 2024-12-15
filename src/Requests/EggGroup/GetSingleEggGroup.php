<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EggGroup;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSingleEggGroup extends Request
{
    /**
     * HTTP Method
     */
    protected Method $method = Method::GET;

    public function __construct(protected readonly int|string $idOrName) {}

    /**
     * Resolve the endpoint
     */
    public function resolveEndpoint(): string
    {
        return "/egg-group/$this->idOrName";
    }
}
