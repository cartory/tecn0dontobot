<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class Tratamiento
 *
 * @property $id
 * @property $nombre
 * @property $Especialidadid
 *
 * @property ConsultaTratamiento[] $consultaTratamientos
 * @property Especialidad $especialidad
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tratamiento extends Model
{
    use SoftDeletes, Searchable;

    static $rules = [
		'nombre' => 'required',
		'Especialidadid' => 'required',
    ];

    protected $table = 'Tratamiento';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','Especialidadid'];
    
    public static function columns(): array {
        return Schema::getColumnListing('Tratamiento');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultaTratamientos()
    {
        return $this->hasMany('App\Models\ConsultaTratamiento', 'Tratamientoid', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function especialidad()
    {
        return $this->hasOne('App\Models\Especialidad', 'id', 'Especialidadid');
    }


}
