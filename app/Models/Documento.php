<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = [
        'documentable_type',
        'documentable_id',
        'cpf_cnpj',
        'representante',
        'datadenascimento',
        'identidade',
        'orgaoexpedidor',
        'datadeexpedicao',    
        'genero',
        'estadocivil',
    ];

    /**
     * Get the parent documentable model (User, Consorcio, Odonto, etc).
     */
    public function documentable(): MorphTo
    {
        return $this->morphTo();
    }
}

