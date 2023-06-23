<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 *
 * @property $id
 * @property $id_hospitals
 * @property $name
 * @property $location
 * @property $created_at
 * @property $updated_at
 *
 * @property Bedroom[] $bedrooms
 * @property Doctor[] $doctors
 * @property Hospital $hospital
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Room extends Model
{
    
    static $rules = [
		'id_hospitals' => 'required',
		'name' => 'required',
		'location' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_hospitals','name','location'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bedrooms()
    {
        return $this->hasMany('App\Models\Bedroom', 'id_rooms', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doctors()
    {
        return $this->hasMany('App\Models\Doctor', 'id_rooms', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hospital()
    {
        return $this->hasOne('App\Models\Hospital', 'id', 'id_hospitals');
    }
    

}
