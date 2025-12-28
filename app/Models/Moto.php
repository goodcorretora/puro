<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Moto extends Model
{
    use HasFactory;

    protected $fillable  = [
        'user_id',
        'placa',
        'ano',
        'ano_fabricacao',
        'zero_km',
        'modelo',
        'localizacao',
        'eCondutorPrincipal',
        'cpf_condutor',
        'name',
        'email',
        'cpf_cnpj',
        'phone_celular',
        'interesse_comunicacoes',
    ];

    public function userMoto()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the moto's enderecos.
     */
    public function enderecos(): MorphMany
    {
        return $this->morphMany(Endereco::class, 'addressable');
    }

    /**
     * Get all of the moto's documentos.
     */
    public function documentos(): MorphMany
    {
        return $this->morphMany(Documento::class, 'documentable');
    }
}
