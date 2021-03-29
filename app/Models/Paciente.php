<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;
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
    use HasFactory;
    use SoftDeletes;
    use Searchable;

    static $rules = [
		'ci' => 'required',
		'nombre' => 'required',
		'fNac' => 'required',
		'celular' => 'required',
		'genero' => 'required',
    ];

    protected $perPage = 6;
    protected $table = 'Paciente';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ci','nombre','fNac','celular','genero'];

    public static function columns(): array {
      return Schema::getColumnListing('Paciente');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Citum', 'Pacienteid', 'id');
    }

}
