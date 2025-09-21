<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = ['tipo_servico', 'preco', 'duracao'];

    // Relacionamento: um serviço tem muitos agendamentos
    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
