<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\ContestEffect\GetAllContestEffects;
use PokeApiSdk\Requests\ContestEffect\GetSingleContestEffect;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ContestEffectResource extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function all(?int $limit = null): Response
    {
        return $this->connector->send(new GetAllContestEffects($limit));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function get(int $id): Response
    {
        return $this->connector->send(new GetSingleContestEffect($id));
    }
}
