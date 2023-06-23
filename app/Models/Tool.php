<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tool
 *
 * @property $id
 * @property $name
 * @property $lot
 * @property $id_hospitals
 *
 * @property Hospital $hospital
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tool extends Model
{
    
    static $rules = [
		'name' => 'required',
		'lot' => 'required',
		'id_hospitals' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','lot','id_hospitals'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hospital()
    {
        return $this->hasOne('App\Models\Hospital', 'id', 'id_hospitals');
    }
    

}
