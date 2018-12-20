<?php

use thanhtung\vuerenacar\models\Vehicle;
use thanhtung\vuerenacar\models\Location;

Route::get('vehicles', function(){
    $vehicles = Vehicle::all();
    return $vehicles;
});

Route::get('locations', function(){
    $locations = Location::all();
    return $locations;
});

Route::get('locations/list', function(){
    $locations = Location::all();
    foreach($locations as $location){
        $location['value'] = $location['id'];
        $location['label'] = $location['title'];
        unset($location['id']);
        unset($location['title']);
        unset($location['slug']);
    }
    
    return $locations;
});