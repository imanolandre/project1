<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $nombre
 * @property $tipo
 * @property $cotización
 * @property $fechainicio
 * @property $fechafin
 * @property $prototipo
 * @property $requerimientos
 * @property $descripción
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'tipo' => 'required',
		'cotización' => 'required',
		'fechainicio' => 'required',
		'fechafin' => 'required',
		'prototipo' => 'required',
		'requerimientos' => 'required',
		'descripción' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','tipo','cotización','fechainicio','fechafin','prototipo','requerimientos','descripción'];



}
