<?php

namespace Hotel;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    protected $table = 'reservas';
    public $timestamps = false;

    protected $fillable = [
      'status', 'n_noches', 'f_entrada', 'f_salida',
    ];

    public function habitaciones(){
      return $this->belongsTo(Habitaciones::class,'habitacion_id');
    }
    public function huespedes(){
      return $this->belongsTo(Huespedes::class,'huesped_id','pasaporte');
    }

    public function docentes(){
      return $this->belongsTo(Docentes::class,'docente_id','pasaporte');
    }
}
