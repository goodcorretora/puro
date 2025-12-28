<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Auto extends Model
{
    use HasFactory;

    protected $fillable  = [
        'user_id',
        'placa',
        'modificado',
        'leilao',   
        'ano',
        'ano_fabricacao',
        'zero_km',
        'modelo',
        'uso', 
        'bonus',
        'localizacao',
        'experiencia',
        'seguradora',
        'classe_bonus',
        'eCondutorPrincipal',
        'cpf_condutor',
        'name',
        'email',
        'cpf_cnpj',
        'phone_celular',
        'interesse_comunicacoes',
    ];

    public function userCar()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the auto's enderecos.
     */
    public function enderecos(): MorphMany
    {
        return $this->morphMany(Endereco::class, 'addressable');
    }

    /**
     * Get all of the auto's documentos.
     */
    public function documentos(): MorphMany
    {
        return $this->morphMany(Documento::class, 'documentable');
    }
}
