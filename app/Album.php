<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 07/08/2015
 * Time: 9:45
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
    protected $table = 'usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}