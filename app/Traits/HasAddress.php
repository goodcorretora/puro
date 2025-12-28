<?php

namespace App\Traits;

use App\Models\Endereco;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasAddress
{
    /**
     * Get all of the model's enderecos.
     */
    public function enderecos(): MorphMany
    {
        return $this->morphMany(Endereco::class, 'addressable');
    }

    /**
     * Get the model's primary endereco.
     */
    public function endereco(): MorphOne
    {
        return $this->morphOne(Endereco::class, 'addressable');
    }
}
