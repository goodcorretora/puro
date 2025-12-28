<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Ocupacional extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'name', 
        'representante', 
        'email', 
        'phone_celular', 
        'phone_fixo', 
        'cnpj', 
        'cep', 
        'endereco', 
        'numero', 
        'complemento', 
        'bairro', 
        'cidade', 
        'estado', 
        'funcionarios', 
        'ocupacional', 
        'seguranca', 
        'ergonomico', 
        'ambulatorio', 
        'pericia', 
        'promocao'
    ];

    protected $casts = [
        'ocupacional' => 'boolean',
        'seguranca' => 'boolean',
        'ergonomico' => 'boolean',
        'ambulatorio' => 'boolean',
        'pericia' => 'boolean',
        'promocao' => 'boolean',
    ];

    public function userOcupacional()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the ocupacional's enderecos.
     */
    public function enderecos(): MorphMany
    {
        return $this->morphMany(Endereco::class, 'addressable');
    }

    /**
     * Get all of the ocupacional's documentos.
     */
    public function documentos(): MorphMany
    {
        return $this->morphMany(Documento::class, 'documentable');
    }
}
