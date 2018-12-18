<?php

use thanhtung\vuerenacar\models\Vehicle;

Route::get('vehicles', function(){
    $vehicles = Vehicle::all();
    return $vehicles;
});