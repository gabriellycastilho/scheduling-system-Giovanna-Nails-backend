<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'servico_id',
        'data',
        'hora_inicio',
        'hora_fim',
        'status'
    ];

    // Relacionamento: pertence a um cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relacionamento: pertence a um serviço
    public function servico()
    {
        return $this->belongsTo(Servico::class);
    }
}

