<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IniciativaActor extends Model
{
    protected $table = 'iniciativa_actor';
    protected $fillable = [
      'nombre_organizacion',
      'canton_id',
      'siglas',
      'sitio_web',
      'enfoque',
      'direccion',
      'latitud',
      'longitud',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function canton()
    {
        return $this->belongsTo(Canton::class);
    }
}
