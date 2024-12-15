<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use Exception;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource as SaloonBaseResource;
use Saloon\Http\Response;

abstract class BaseResource extends SaloonBaseResource
{
    abstract protected function getAllRequestClass(): string;

    abstract protected function getSingleRequestClass(): string;

    protected bool $allowString = true;

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function all(?int $limit = null): Response
    {
        $requestClass = $this->getAllRequestClass();

        return $this->connector->send(new $requestClass($limit));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     * @throws Exception
     */
    public function get(int|string $idOrName): Response
    {
        if (!$this->allowString && !is_int($idOrName)) {
            throw new Exception('This resource only supports fetching by integer ID.');
        }

        $requestClass = $this->getSingleRequestClass();

        return $this->connector->send(new $requestClass($idOrName));
    }
}
