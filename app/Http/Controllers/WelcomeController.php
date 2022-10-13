<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
 public function welcome($name='',$lastname='',$age=0, Request $nat) {
    $lang =$nat->input('lang');

    switch ($lang)
    {
        case 'en':
            $message='Hello <br/>User '.$name.' '.$lastname.' age '.$age;
            break;
        case 'es':
            $message='Hola <br/>User '.$name.' '.$lastname.' edad '.$age;
            break;
        case 'it':
                $message='Ciao <br/>User '.$name.' '.$lastname.' età '.$age;


    }

        return $message;
    }
}
