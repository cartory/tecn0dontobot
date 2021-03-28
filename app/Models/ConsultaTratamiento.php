<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultaTratamiento extends Model
{
    use HasFactory;
    protected $table = 'Consulta_Tratamiento';
    protected $fillable = ['Consultaid','Tratamientoid'];
    public $timestamps = false;
    protected $primaryKey='Consultaid';
}
