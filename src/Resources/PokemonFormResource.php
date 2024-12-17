<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\PokemonForm\GetAllPokemonForms;
use PokeApiSdk\Requests\PokemonForm\GetSinglePokemonForm;

class PokemonFormResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllPokemonForms::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSinglePokemonForm::class;
    }
}
