<?php

declare(strict_types=1);

namespace PokeApiSdk;

use PokeApiSdk\Resources\AbilityResource;
use PokeApiSdk\Resources\BerryFirmnessResource;
use PokeApiSdk\Resources\BerryFlavorResource;
use PokeApiSdk\Resources\BerryResource;
use PokeApiSdk\Resources\CharacteristicResource;
use PokeApiSdk\Resources\ContestEffectResource;
use PokeApiSdk\Resources\ContestTypeResource;
use PokeApiSdk\Resources\EggGroupResource;
use PokeApiSdk\Resources\EncounterConditionResource;
use PokeApiSdk\Resources\EncounterConditionValueResource;
use PokeApiSdk\Resources\EncounterMethodResource;
use PokeApiSdk\Resources\EvolutionChainResource;
use PokeApiSdk\Resources\EvolutionTriggerResource;
use PokeApiSdk\Resources\GenderResource;
use PokeApiSdk\Resources\GenerationResource;
use PokeApiSdk\Resources\GrowthRateResource;
use PokeApiSdk\Resources\ItemAttributeResource;
use PokeApiSdk\Resources\ItemCategoryResource;
use PokeApiSdk\Resources\ItemFlingEffectResource;
use PokeApiSdk\Resources\ItemPocketResource;
use PokeApiSdk\Resources\ItemResource;
use PokeApiSdk\Resources\LanguageResource;
use PokeApiSdk\Resources\LocationAreaResource;
use PokeApiSdk\Resources\LocationResource;
use PokeApiSdk\Resources\MachineResource;
use PokeApiSdk\Resources\MoveAilmentResource;
use PokeApiSdk\Resources\MoveBattleStyleResource;
use PokeApiSdk\Resources\MoveCategoryResource;
use PokeApiSdk\Resources\MoveDamageClassResource;
use PokeApiSdk\Resources\MoveLearnMethodResource;
use PokeApiSdk\Resources\MoveResource;
use PokeApiSdk\Resources\MoveTargetResource;
use PokeApiSdk\Resources\NatureResource;
use PokeApiSdk\Resources\PalParkAreaResource;
use PokeApiSdk\Resources\PokeathlonStatResource;
use PokeApiSdk\Resources\PokedexResource;
use PokeApiSdk\Resources\PokemonColorResource;
use PokeApiSdk\Resources\PokemonFormResource;
use PokeApiSdk\Resources\PokemonHabitatResource;
use PokeApiSdk\Resources\PokemonResource;
use PokeApiSdk\Resources\PokemonShapeResource;
use PokeApiSdk\Resources\RegionResource;
use PokeApiSdk\Resources\SpeciesResource;
use PokeApiSdk\Resources\StatResource;
use PokeApiSdk\Resources\SuperContestEffectResource;
use PokeApiSdk\Resources\TypeResource;
use PokeApiSdk\Resources\VersionGroupResource;
use PokeApiSdk\Resources\VersionResource;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Connector;

class PokeApi extends Connector
{
    protected ?string $response = PokeApiResponse::class;

    public function resolveBaseUrl(): string
    {
        return 'https://pokeapi.co/api/v2/';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    public function ability(): AbilityResource
    {
        return new AbilityResource($this);
    }

    public function berry(): BerryResource
    {
        return new BerryResource($this);
    }

    public function berryFirmness(): BerryFirmnessResource
    {
        return new BerryFirmnessResource($this);
    }

    public function berryFlavor(): BerryFlavorResource
    {
        return new BerryFlavorResource($this);
    }

    public function characteristic(): CharacteristicResource
    {
        return new CharacteristicResource($this);
    }

    public function contestEffect(): ContestEffectResource
    {
        return new ContestEffectResource($this);
    }

    public function contestType(): ContestTypeResource
    {
        return new ContestTypeResource($this);
    }

    public function eggGroup(): EggGroupResource
    {
        return new EggGroupResource($this);
    }

    public function encounterCondition(): EncounterConditionResource
    {
        return new EncounterConditionResource($this);
    }

    public function encounterConditionValue(): EncounterConditionValueResource
    {
        return new EncounterConditionValueResource($this);
    }

    public function encounterMethod(): EncounterMethodResource
    {
        return new EncounterMethodResource($this);
    }

    public function evolutionChain(): EvolutionChainResource
    {
        return new EvolutionChainResource($this);
    }

    public function evolutionTrigger(): EvolutionTriggerResource
    {
        return new EvolutionTriggerResource($this);
    }

    public function gender(): GenderResource
    {
        return new GenderResource($this);
    }

    public function generation(): GenerationResource
    {
        return new GenerationResource($this);
    }

    public function growthRate(): GrowthRateResource
    {
        return new GrowthRateResource($this);
    }

    public function item(): ItemResource
    {
        return new ItemResource($this);
    }

    public function itemAttribute(): ItemAttributeResource
    {
        return new ItemAttributeResource($this);
    }

    public function itemCategory(): ItemCategoryResource
    {
        return new ItemCategoryResource($this);
    }

    public function itemFlingEffect(): ItemFlingEffectResource
    {
        return new ItemFlingEffectResource($this);
    }

    public function itemPocket(): ItemPocketResource
    {
        return new ItemPocketResource($this);
    }

    public function language(): LanguageResource
    {
        return new LanguageResource($this);
    }

    public function location(): LocationResource
    {
        return new LocationResource($this);
    }

    public function locationArea(): LocationAreaResource
    {
        return new LocationAreaResource($this);
    }

    public function machine(): MachineResource
    {
        return new MachineResource($this);
    }

    public function move(): MoveResource
    {
        return new MoveResource($this);
    }

    public function moveAilment(): MoveAilmentResource
    {
        return new MoveAilmentResource($this);
    }

    public function moveBattleStyle(): MoveBattleStyleResource
    {
        return new MoveBattleStyleResource($this);
    }

    public function moveCategory(): MoveCategoryResource
    {
        return new MoveCategoryResource($this);
    }

    public function moveDamageClass(): MoveDamageClassResource
    {
        return new MoveDamageClassResource($this);
    }

    public function moveLearnMethod(): MoveLearnMethodResource
    {
        return new MoveLearnMethodResource($this);
    }

    public function moveTarget(): MoveTargetResource
    {
        return new MoveTargetResource($this);
    }

    public function nature(): NatureResource
    {
        return new NatureResource($this);
    }

    public function palParkArea(): PalParkAreaResource
    {
        return new PalParkAreaResource($this);
    }

    public function pokeathlonStat(): PokeathlonStatResource
    {
        return new PokeathlonStatResource($this);
    }

    public function pokedex(): PokedexResource
    {
        return new PokedexResource($this);
    }

    public function pokemon(): PokemonResource
    {
        return new PokemonResource($this);
    }

    public function pokemonColor(): PokemonColorResource
    {
        return new PokemonColorResource($this);
    }

    public function pokemonForm(): PokemonFormResource
    {
        return new PokemonFormResource($this);
    }

    public function pokemonHabitat(): PokemonHabitatResource
    {
        return new PokemonHabitatResource($this);
    }

    public function pokemonShape(): PokemonShapeResource
    {
        return new PokemonShapeResource($this);
    }

    public function region(): RegionResource
    {
        return new RegionResource($this);
    }

    public function species(): SpeciesResource
    {
        return new SpeciesResource($this);
    }

    public function stat(): StatResource
    {
        return new StatResource($this);
    }

    public function superContestEffect(): SuperContestEffectResource
    {
        return new SuperContestEffectResource($this);
    }

    public function type(): TypeResource
    {
        return new TypeResource($this);
    }

    public function version(): VersionResource
    {
        return new VersionResource($this);
    }

    public function versionGroup(): VersionGroupResource
    {
        return new VersionGroupResource($this);
    }
}
