<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctor
 *
 * @property $id
 * @property $id_rooms
 * @property $identity_card
 * @property $names
 * @property $surnames
 * @property $birthdate
 * @property $gender
 * @property $form
 * @property $address
 * @property $mail
 * @property $specialty
 *
 * @property Room $room
 * @property Service[] $services
 * @property Visit[] $visits
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Doctor extends Model
{
    
    static $rules = [
		'id_rooms' => 'required',
		'identity_card' => 'required',
		'names' => 'required',
		'surnames' => 'required',
		'birthdate' => 'required',
		'gender' => 'required',
		'form' => 'required',
		'address' => 'required',
		'mail' => 'required',
		'specialty' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_rooms','identity_card','names','surnames','birthdate','gender','form','address','mail','specialty'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function room()
    {
        return $this->hasOne('App\Models\Room', 'id', 'id_rooms');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany('App\Models\Service', 'id_doctors', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visits()
    {
        return $this->hasMany('App\Models\Visit', 'id_doctors', 'id');
    }
    

}
