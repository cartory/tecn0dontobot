<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Citum
 *
 * @property $id
 * @property $horaInicio
 * @property $horaFin
 * @property $Pacienteid
 * @property $Agendaid
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Agenda $agenda
 * @property Consultum[] $consultas
 * @property Paciente $paciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Citum extends Model
{
    use SoftDeletes;

    static $rules = [
		'horaInicio' => 'required',
		'Pacienteid' => 'required',
		'Agendaid' => 'required',
    ];

    protected $perPage = 20;
    protected $table = 'Cita';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['horaInicio','horaFin','Pacienteid','Agendaid'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function agenda()
    {
        return $this->hasOne('App\Models\Agenda', 'id', 'Agendaid');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultas()
    {
        return $this->hasMany('App\Models\Consultum', 'Citaid', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'Pacienteid');
    }
    

}
