<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EvolutionTrigger;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSingleEvolutionTrigger extends Request
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
        return "/evolution-trigger/$this->idOrName";
    }
}
