<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Receta
 *
 * @property $id
 * @property $profesionalid
 * @property $pacienteid
 * @property $medicamento
 * @property $pautas
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Receta extends Model
{
    
    static $rules = [
		'profesionalid' => 'required',
		'pacienteid' => 'required',
		'medicamento' => 'required',
		'pautas' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['profesionalid','pacienteid','medicamento','pautas','fecha'];

    protected $with = [
      'profesional',
      'paciente',
    ];

    public function profesional()
    {
        return $this->hasOne(Persona::class, 'id', 'profesionalid');
    }

    public function paciente()
    {
        return $this->hasOne(Persona::class, 'id', 'pacienteid');
    }

}
