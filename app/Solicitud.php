<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    //
    protected $table='solicitudes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'estado','nombre','codigo','descripcion_equipo','descripcion','fecha','user_id'
    ];

     /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
