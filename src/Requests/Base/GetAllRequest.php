<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Base;

use Saloon\Enums\Method;
use Saloon\Http\Request;

abstract class GetAllRequest extends Request
{
    /**
     * HTTP Method
     */
    protected Method $method = Method::GET;

    public function __construct(protected readonly ?int $limit = 100) {}

    abstract protected function endpointName(): string;

    /**
     * Resolve the endpoint
     */
    public function resolveEndpoint(): string
    {
        return '/' . $this->endpointName();
    }

    protected function defaultQuery(): array
    {
        return [
            'limit' => $this->limit,
        ];
    }
}
