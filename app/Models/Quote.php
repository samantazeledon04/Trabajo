<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Quote
 *
 * @property $id
 * @property $id_records
 * @property $id_services
 * @property $date
 * @property $reason
 * @property $created_at
 * @property $updated_at
 *
 * @property Record $record
 * @property Service $service
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Quote extends Model
{
    
    static $rules = [
		'id_records' => 'required',
		'id_services' => 'required',
		'date' => 'required',
		'reason' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_records','id_services','date','reason'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function record()
    {
        return $this->hasOne('App\Models\Record', 'id', 'id_records');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function service()
    {
        return $this->hasOne('App\Models\Service', 'id', 'id_services');
    }
    

}
