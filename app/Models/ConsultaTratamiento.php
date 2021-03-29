<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class ConsultaTratamiento extends Model
{
    use HasFactory,Searchable;
    protected $table = 'Consulta_Tratamiento';
    protected $fillable = ['Consultaid','Tratamientoid'];
    public $timestamps = false;
    protected $primaryKey='Consultaid';
}
