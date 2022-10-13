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

        return view('blog');
    }

    public function family()
    {
        /*
        return view('family',
    [
        'titolo'=>'La mia famiglia',
        'members'=>$this->data
    ]);

      return view('family')
      ->with('members' ,$this->data)
      ->with('titolo' ,'La mia famiglia');



      return view('family')
      ->withMembers($this->data)
      ->withTitolo('La mia famiglia');
      */
      $members=$this->data;
      $titolo='La mia famiglia';
      return view('family', compact('members','titolo'));
    }




}
