<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $identificacion
 * @property $fecha_nacimiento
 * @property $tipo_persona
 * @property $telefono
 * @property $correo_electronico
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'identificacion' => 'required',
		'fecha_nacimiento' => 'required',
		'tipo_persona' => 'required',
		'telefono' => 'required',
		'correo_electronico' => 'required',
		'Rh',
		'genero',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','identificacion','fecha_nacimiento','tipo_persona','telefono','correo_electronico', 'Rh', 'genero'];



}
