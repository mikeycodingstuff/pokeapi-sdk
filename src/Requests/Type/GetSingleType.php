<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Type;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSingleType extends Request
{
    /**
     * HTTP Method
     */
    protected Method $method = Method::GET;

    public function __construct(protected readonly int $id) {}

    /**
     * Resolve the endpoint
     */
    public function resolveEndpoint(): string
    {
        return "/type/$this->id";
    }
}
