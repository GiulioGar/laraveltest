
<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;

Route::get('/',[HomeController::class,'index']);

/*aggiungo una variabile alla route*/

Route::get('/{name?}/{lastname?}/{age?}',[WelcomeController::class,'welcome'] )
/*
// indico che la route deve essere un valore stringa
-> where('name', '[a-zA-Z]+')
-> where('lastname', '[a-zA-Z]+')
*/
-> where([
    'name' =>'[a-zA-Z]+',
    'lastname' =>'[a-zA-Z]+',
    'age' =>'[0-9]{1,3}+',
])
;
