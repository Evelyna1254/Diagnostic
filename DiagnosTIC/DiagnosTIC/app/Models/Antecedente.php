<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Antecedente
 *
 * @property $id
 * @property $pacienteid
 * @property $peso
 * @property $estatura
 * @property $presion
 * @property $enfermedad_actuales
 * @property $medicamentos
 * @property $alergias
 * @property $intervenciones_quirurgicas
 * @property $transfuciones
 * @property $antecedentes_familiares
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Antecedente extends Model
{
    
    static $rules = [
		'pacienteid' => 'required',
		'peso' => 'required',
		'estatura' => 'required',
		'presion' => 'required',
		'enfermedad_actuales' => 'required',
		'medicamentos' => 'required',
		'alergias' => 'required',
		'intervenciones_quirurgicas' => 'required',
		'transfuciones' => 'required',
		'antecedentes_familiares' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pacienteid','peso','estatura','presion','enfermedad_actuales','medicamentos','alergias','intervenciones_quirurgicas','transfuciones','antecedentes_familiares'];

	protected $with = [
		'paciente',
	  ];

	public function paciente()
    {
        return $this->hasOne(Persona::class, 'id', 'pacienteid');
    }
}
