<?php

namespace Hotel;

use Illuminate\Database\Eloquent\Model;

class Testimonios extends Model
{
    protected $table = 'testimonios';
    public $timestamps = false;

    protected $fillable = [
      'descripcion', 'fecha_creacion', 'autor',
    ];

    public function usuarios(){
      return $this->belongsToMany(Users::class,'usuario_tiene_testimonios','usuario_rut','testimonio_id');
    }
}
