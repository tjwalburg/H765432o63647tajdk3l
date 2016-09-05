<?php

namespace Hotel;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $increments = false;
    protected $primaryKey = 'rut';

    protected $fillable = [
        'rut', 'nombre', 'apellidos', 'email', 'password', 'privilegios',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function testimonios(){
      return $this->belongsToMany(Testimonios::class,'usuario_tiene_testimonios','usuario_rut','testimonio_id');
    }

}
