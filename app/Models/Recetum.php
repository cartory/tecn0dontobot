<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class Recetum
 *
 * @property $id
 * @property $titulo
 * @property $descripcion
 * @property $fecha
 * @property $Consultaid
 *
 * @property Consultum $consultum
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recetum extends Model
{
    use SoftDeletes;

    static $rules = [
		'titulo' => 'required',
		'Consultaid' => 'required',
    ];

    protected $perPage = 20;
    protected $table = 'Receta';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','descripcion','fecha','Consultaid'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function consultum()
    {
        return $this->hasOne('App\Models\Consultum', 'id', 'Consultaid');
    }
    

}
