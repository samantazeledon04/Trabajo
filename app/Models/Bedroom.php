<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bedroom
 *
 * @property $id
 * @property $id_rooms
 * @property $number
 * @property $ability
 * @property $created_at
 * @property $updated_at
 *
 * @property Bed[] $beds
 * @property Record[] $records
 * @property Room $room
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bedroom extends Model
{
    
    static $rules = [
		'id_rooms' => 'required',
		'number' => 'required',
		'ability' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_rooms','number','ability'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function beds()
    {
        return $this->hasMany('App\Models\Bed', 'id_bedrooms', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany('App\Models\Record', 'id_bedrooms', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function room()
    {
        return $this->hasOne('App\Models\Room', 'id', 'id_rooms');
    }
    

}
