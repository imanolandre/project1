<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $nombre
 * @property $moneda
 * @property $metododepago
 * @property $proyecto
 * @property $formadepago
 * @property $facturar
 * @property $subtotal
 * @property $iva
 * @property $imputrasladados
 * @property $impuretenidos
 * @property $total
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'moneda' => 'required',
		'metododepago' => 'required',
		'proyecto' => 'required',
		'formadepago' => 'required',
		'facturar' => 'required',
		'subtotal' => 'required',
		'iva' => 'required',
		'imputrasladados' => 'required',
		'impuretenidos' => 'required',
		'total' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','moneda','metododepago','proyecto','formadepago','facturar','subtotal','iva','imputrasladados','impuretenidos','total','observaciones'];



}
