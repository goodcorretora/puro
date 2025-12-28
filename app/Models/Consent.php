<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consent extends Model
{
        
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'name', 
        'email', 
        'phone_celular', 
        'cpf', 
        'consorcio'
    ];

    public function userConsorcio()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
