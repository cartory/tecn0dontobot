<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agenda
 *
 * @property $id
 * @property $nombre
 * @property $Odontologoid
 *
 * @property Citum[] $citas
 * @property Odontologo $odontologo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Agenda extends Model
{
    use SoftDeletes;
    
    static $rules = [
		'Odontologoid' => 'required',
    ];

    protected $perPage = 20;
    protected $table='Agenda';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','Odontologoid'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Citum', 'Agendaid', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function odontologo()
    {
        return $this->hasOne('App\Models\Odontologo', 'id', 'Odontologoid');
    }
    

}
