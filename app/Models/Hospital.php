<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hospital
 *
 * @property $id
 * @property $name
 * @property $location
 * @property $contact
 * @property $mail
 * @property $manager
 *
 * @property Record[] $records
 * @property Service[] $services
 * @property Tool[] $tools
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hospital extends Model
{
    
    static $rules = [
		'name' => 'required',
		'location' => 'required',
		'contact' => 'required',
		'mail' => 'required',
		'manager' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','location','contact','mail','manager'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany('App\Models\Record', 'id_hospitals', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany('App\Models\Service', 'id_hospitals', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tools()
    {
        return $this->hasMany('App\Models\Tool', 'id_hospitals', 'id');
    }
    

}
