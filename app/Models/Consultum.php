<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
/**
 * Class Consultum
 *
 * @property $id
 * @property $fechaEmision
 * @property $Citaid
 *
 * @property Citum $citum
 * @property ConsultaTratamiento $consultaTratamiento
 * @property Recetum[] $recetas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consultum extends Model
{
    use SoftDeletes,Searchable;

    static $rules = [
		'fechaEmision' => 'required',
		'Citaid' => 'required',
    ];

    protected $perPage = 20;
    protected $table = 'Consulta';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fechaEmision','Citaid'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function citum()
    {
        return $this->hasOne('App\Models\Citum', 'id', 'Citaid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function consultaTratamiento()
    {
        return $this->hasOne('App\Models\ConsultaTratamiento', 'Consultaid', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recetas()
    {
        return $this->hasMany('App\Models\Recetum', 'Consultaid', 'id');
    }


}
