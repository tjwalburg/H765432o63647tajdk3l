<?php

namespace Hotel;

use Illuminate\Database\Eloquent\Model;

class Huespedes extends Model
{
    protected $table = 'huespedes';
    protected $primaryKey = 'pasaporte';
    public $timestamps = false;

    protected $fillable = [
      'pasaporte', 'nombres', 'apellidos', 'universidad', 'pais', 'nacionalidad', 'email',
    ];

    public function reservas(){
      return $this->hasMany(Reservas::class);
    }
}
