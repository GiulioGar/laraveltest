
<?php

/*aggiungo una variabile alla route*/

Route::get('/{name?}/{lastname?}/{age?}', function ($name='',$lastname='',$age='') {
    return 'Admin Page <br/>User '.$name.' '.$lastname.' età '.$age;
})
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
