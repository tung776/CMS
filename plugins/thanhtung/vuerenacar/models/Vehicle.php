<?php namespace Thanhtung\Vuerenacar\Models;

use Model;

/**
 * Model
 */
class Vehicle extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /* Relations */
    public $belongsToMany = [
        'locations'=>[
            'locations'=> 'thanhtung\vuerenacar\Location',
            'table'=>'thanhtung_vuerenacar_vehicles_locations',
            'order'=>'title'
        ]
    ];
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'thanhtung_vuerenacar_vehicles';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
