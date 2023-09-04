<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombrecliente
 * @property $correo
 * @property $teléfono
 * @property $empresa
 * @property $sitioweb
 * @property $dirección
 * @property $razónsocial
 * @property $rfc
 * @property $direcciónfiscal
 * @property $codigopostal
 * @property $regimenincorporación
 * @property $constanciasituaciónFiscal
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombrecliente' => 'required',
		'correo' => 'required',
		'teléfono' => 'required',
		'empresa' => 'required',
		'sitioweb' => 'required',
		'dirección' => 'required',
		'razónsocial' => 'required',
		'rfc' => 'required',
		'direcciónfiscal' => 'required',
		'codigopostal' => 'required',
		'regimenincorporación' => 'required',
		'constanciasituaciónFiscal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombrecliente','correo','teléfono','empresa','sitioweb','dirección','razónsocial','rfc','direcciónfiscal','codigopostal','regimenincorporación','constanciasituaciónFiscal'];



}
