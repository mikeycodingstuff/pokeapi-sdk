<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Characteristic\GetAllCharacteristics;
use PokeApiSdk\Requests\Characteristic\GetSingleCharacteristic;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CharacteristicResource extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function all(?int $limit = null): Response
    {
        return $this->connector->send(new GetAllCharacteristics($limit));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function get(int $id): Response
    {
        return $this->connector->send(new GetSingleCharacteristic($id));
    }
}
