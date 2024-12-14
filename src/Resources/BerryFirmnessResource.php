<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\BerryFirmness\GetAllBerryFirmnesses;
use PokeApiSdk\Requests\BerryFirmness\GetSingleBerryFirmness;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BerryFirmnessResource extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function all(?int $limit = null): Response
    {
        return $this->connector->send(new GetAllBerryFirmnesses($limit));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function get(int|string $idOrName): Response
    {
        return $this->connector->send(new GetSingleBerryFirmness($idOrName));
    }
}
