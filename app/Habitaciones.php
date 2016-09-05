<?php

namespace Hotel;

use Illuminate\Database\Eloquent\Model;

class Habitaciones extends Model
{
    protected $table = 'habitaciones';
    public $timestamps = false;

    protected $fillable = [
      'tipo', 'valor',
    ];

    public function reservas(){
      return $this->hasMany(Reservas::class);
    }
}
