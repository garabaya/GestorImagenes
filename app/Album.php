<?php
/**
 * Author: Rubén Garabaya Arenas
 * Project: GestorImagenes
 * Date: 07/08/2015
 * Time: 10:16
 */

namespace GestorImagenes;


use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'albumes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'nombre', 'descripcion', 'usuario_id'];

    //Relaciones

    public function fotos()
    {
        return $this->hasMany('GestorImagenes\Foto');
    }

    public function propietario()
    {
        return $this->belongsTo('GestorImagenes\Usuario');
    }

}