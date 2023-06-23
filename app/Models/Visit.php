<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visit
 *
 * @property $id
 * @property $id_records
 * @property $id_doctors
 * @property $date
 * @property $diagnostic
 * @property $treatments
 * @property $created_at
 * @property $updated_at
 *
 * @property Doctor $doctor
 * @property Record $record
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Visit extends Model
{
    
    static $rules = [
		'id_records' => 'required',
		'id_doctors' => 'required',
		'date' => 'required',
		'diagnostic' => 'required',
		'treatments' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_records','id_doctors','date','diagnostic','treatments'];


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
    public function record()
    {
        return $this->hasOne('App\Models\Record', 'id', 'id_records');
    }
    

}
