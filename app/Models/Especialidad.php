<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Especialidad
 *
 * @property $id
 * @property $nombre
 *
 * @property OdontologoEspecialidad[] $odontologoEspecialidads
 * @property Tratamiento[] $tratamientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Especialidad extends Model
{
    use SoftDeletes;
    
    static $rules = [
    ];

    protected $table = 'Especialidad';

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function odontologoEspecialidads()
    {
        return $this->hasMany('App\Models\OdontologoEspecialidad', 'Especialidadid', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tratamientos()
    {
        return $this->hasMany('App\Models\Tratamiento', 'Especialidadid', 'id');
    }
    

}
