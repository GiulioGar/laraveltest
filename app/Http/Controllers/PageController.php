<?php

namespace App\Http\Controllers;



class PageController extends Controller
{

    protected $data = [
            [
                'name' => 'Giulio',
                'lastname' => 'Garofalo',
            ],
            [
                'name' => 'Claudia',
                'lastname' => 'Cristiano',
            ],
            [
                'name' => 'Antonio',
                'lastname' => 'Garofalo',
            ],
            [
                'name' => 'Antonietta',
                'lastname' => 'Giangrande',
            ]
    ];

    public function about()
    {

        return view('about');
    }

    public function blog()
    {

        return view('blog')
        ->with('titolo' ,'Il mio Blog');

    }

    public function family()
    {
    //metodo 1
    return view('family',
    [
        'titolo'=>'La mia famiglia',
        'members'=>$this->data
    ]);
//metodo 2
      return view('family')
      ->with('members' ,$this->data)
      ->with('titolo' ,'La mia famiglia');

//metodo 3
      return view('family')
      ->withMembers($this->data)
      ->withTitolo('La mia famiglia');

//metodo 4
      $members=$this->data;
      $titolo='La mia famiglia';
      return view('family2', compact('members','titolo'));
    }




}
