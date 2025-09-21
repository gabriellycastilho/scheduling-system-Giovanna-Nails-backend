<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['nome', 'telefone'];

    // Relacionamento: um cliente tem muitos agendamentos
    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}

