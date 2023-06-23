<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Record
 *
 * @property $id
 * @property $id_hospitals
 * @property $identity_card
 * @property $names
 * @property $surnames
 * @property $birthdate
 * @property $gender
 * @property $security_number
 * @property $address
 * @property $mail
 * @property $specialty
 * @property $phone_number
 * @property $emergency_number
 * @property $entry_date
 * @property $departure_date
 * @property $id_bedrooms
 * @property $created_at
 * @property $updated_at
 *
 * @property Bedroom $bedroom
 * @property Hospital $hospital
 * @property Quote[] $quotes
 * @property Visit[] $visits
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Record extends Model
{
    
    static $rules = [
		'id_hospitals' => 'required',
		'identity_card' => 'required',
		'names' => 'required',
		'surnames' => 'required',
		'birthdate' => 'required',
		'gender' => 'required',
		'security_number' => 'required',
		'address' => 'required',
		'mail' => 'required',
		'specialty' => 'required',
		'phone_number' => 'required',
		'emergency_number' => 'required',
		'entry_date' => 'required',
		'departure_date' => 'required',
		'id_bedrooms' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_hospitals','identity_card','names','surnames','birthdate','gender','security_number','address','mail','specialty','phone_number','emergency_number','entry_date','departure_date','id_bedrooms'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bedroom()
    {
        return $this->hasOne('App\Models\Bedroom', 'id', 'id_bedrooms');
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
        return $this->hasMany('App\Models\Quote', 'id_records', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visits()
    {
        return $this->hasMany('App\Models\Visit', 'id_records', 'id');
    }
    

}
