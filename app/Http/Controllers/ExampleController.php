<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        $names = 'Bruno';
        $animals = ['cat', 'dog', 'fish'];
        return view('homepage', ['name'=>$names, 'allAnimals' => $animals]);
    }

    public function aboutPage(){
        return view('single-post');
    }
}
