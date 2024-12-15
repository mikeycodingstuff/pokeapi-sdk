<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Base;

use Saloon\Enums\Method;
use Saloon\Http\Request;

abstract class GetSingleRequest extends Request
{
    /**
     * HTTP Method
     */
    protected Method $method = Method::GET;

    public function __construct(protected readonly int|string $idOrName) {}

    abstract protected function endpointName(): string;

    /**
     * Resolve the endpoint
     */
    public function resolveEndpoint(): string
    {
        return '/' . $this->endpointName() . '/' . $this->idOrName;
    }
}
