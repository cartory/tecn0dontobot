<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Odontologo
 *
 * @property $id
 * @property $ci
 * @property $nombre
 * @property $fNac
 * @property $celular
 * @property $genero
 * @property $Usuarioid
 *
 * @property Agenda[] $agendas
 * @property OdontologoEspecialidad $odontologoEspecialidad
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Odontologo extends Model
{
    
    static $rules = [
		'ci' => 'required',
		'nombre' => 'required',
		'fNac' => 'required',
		'genero' => 'required',
		'Usuarioid' => 'required',
    ];

    protected $perPage = 20;
    protected $table = 'Odontologo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ci','nombre','fNac','celular','genero','Usuarioid'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agendas()
    {
        return $this->hasMany('App\Models\Agenda', 'Odontologoid', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function odontologoEspecialidad()
    {
        return $this->hasOne('App\Models\OdontologoEspecialidad', 'Odontologoid', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'Usuarioid');
    }
    

}
