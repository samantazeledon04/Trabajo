<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 *
 * @property $id
 * @property $id_hospitals
 * @property $id_doctors
 * @property $name
 * @property $description
 * @property $comment
 *
 * @property Doctor $doctor
 * @property Hospital $hospital
 * @property Quote[] $quotes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Service extends Model
{
    
    static $rules = [
		'id_hospitals' => 'required',
		'id_doctors' => 'required',
		'name' => 'required',
		'description' => 'required',
		'comment' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_hospitals','id_doctors','name','description','comment'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor', 'id', 'id_doctors');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hospital()
    {
        return $this->hasOne('App\Models\Hospital', 'id', 'id_hospitals');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotes()
    {
        return $this->hasMany('App\Models\Quote', 'id_services', 'id');
    }
    

}
