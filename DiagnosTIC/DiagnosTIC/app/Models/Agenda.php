<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agenda
 *
 * @property $id
 * @property $descripcion_cita
 * @property $fecha
 * @property $hora_inicio
 * @property $hora_fin
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Agenda extends Model
{
    
    static $rules = [
		'descripcion_cita' => 'required',
		'fecha' => 'required',
		'hora_inicio' => 'required',
		'hora_fin' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion_cita','fecha','hora_inicio','hora_fin'];



}
