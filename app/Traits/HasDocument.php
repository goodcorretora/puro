<?php

namespace App\Traits;

use App\Models\Documento;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasDocument
{
    /**
     * Get all of the model's documentos.
     */
    public function documentos(): MorphMany
    {
        return $this->morphMany(Documento::class, 'documentable');
    }

    /**
     * Get the model's primary documento.
     */
    public function documento(): MorphOne
    {
        return $this->morphOne(Documento::class, 'documentable');
    }
}
