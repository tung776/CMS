<?php namespace Thanhtung\Vuerenacar\Models;

use Model;

/**
 * Model
 */
class Vehicle extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

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
