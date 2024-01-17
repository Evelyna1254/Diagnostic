<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consulta
 *
 * @property $id
 * @property $agendaid
 * @property $antecedenteid
 * @property $profesionalid
 * @property $diagnostico
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consulta extends Model
{
    
    static $rules = [
		'agendaid' => 'required',
		'antecedenteid' => 'required',
		'profesionalid' => 'required',
		'diagnostico' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['agendaid','antecedenteid','profesionalid','diagnostico','observaciones'];

    protected $with = [
      'agenda',
      'antecedente',
      'profesional',
    ];

    public function agenda()
    {
        return $this->hasOne(Agenda::class, 'id', 'agendaid');
    }

    public function antecedente()
    {
        return $this->hasOne(Antecedente::class, 'id', 'antecedenteid');
    }

    public function profesional()
    {
        return $this->hasOne(Persona::class, 'id', 'profesionalid');
    }
}
