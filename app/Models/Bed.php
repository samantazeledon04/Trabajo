<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bed
 *
 * @property $id
 * @property $id_bedrooms
 * @property $number
 * @property $particularity
 * @property $state
 *
 * @property Bedroom $bedroom
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bed extends Model
{
    
    static $rules = [
		'id_bedrooms' => 'required',
		'number' => 'required',
		'particularity' => 'required',
		'state' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_bedrooms','number','particularity','state'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bedroom()
    {
        return $this->hasOne('App\Models\Bedroom', 'id', 'id_bedrooms');
    }
    

}
