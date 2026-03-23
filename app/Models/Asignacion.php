<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'docente_id',
        'materia_id',
        'grupo_id',
    ];

    public function asignacion()
    {
        return $this->belongsToMany(Rol::class, 'usuario_rol', 'usuario_id', 'rol_id');
    }
}
