<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Consorcio extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'name', 
        'email', 
        'phone_celular', 
        'cpf_cnpj', 
        'representante', 
        'consorcio'
    ];

    public function userConsorcio()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the consorcio's enderecos.
     */
    public function enderecos(): MorphMany
    {
        return $this->morphMany(Endereco::class, 'addressable');
    }

    /**
     * Get all of the consorcio's documentos.
     */
    public function documentos(): MorphMany
    {
        return $this->morphMany(Documento::class, 'documentable');
    }
}
