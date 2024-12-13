<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Generation;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAllGenerations extends Request
{
    /**
     * HTTP Method
     */
    protected Method $method = Method::GET;

    /**
     * Resolve the endpoint
     */
    public function resolveEndpoint(): string
    {
        return '/generation';
    }
}
