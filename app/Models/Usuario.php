<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 *
 * @property $id
 * @property $correo
 * @property $contraseña
 *
 * @property Odontologo[] $odontologos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    use SoftDeletes;

    static $rules = [
		'correo' => 'required',
		'contraseña' => 'required',
    ];

    protected $table = 'Usuario';
    
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['correo','contraseña'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function odontologos()
    {
        return $this->hasMany('App\Models\Odontologo', 'Usuarioid', 'id');
    }
    

}
