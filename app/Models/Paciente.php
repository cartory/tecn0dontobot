<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paciente
 *
 * @property $id
 * @property $ci
 * @property $nombre
 * @property $fNac
 * @property $celular
 * @property $genero
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Citum[] $citas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    use SoftDeletes;

    static $rules = [
		'ci' => 'required',
		'nombre' => 'required',
		'fNac' => 'required',
		'celular' => 'required',
		'genero' => 'required',
    ];

    protected $perPage = 20;
    protected $table = 'Paciente';
    
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ci','nombre','fNac','celular','genero'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Citum', 'Pacienteid', 'id');
    }
    

}
