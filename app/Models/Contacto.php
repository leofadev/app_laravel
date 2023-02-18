<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 *
 * @property $id
 * @property $direccion
 * @property $telefono
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contacto extends Model
{
    
    static $rules = [
		'direccion' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['direccion','telefono','correo'];



}
