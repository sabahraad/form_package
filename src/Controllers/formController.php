<?php

namespace Aamarpay\Pgtest\Controllers;

use Illuminate\Http\Request;

class formController 
{
    public function see(){
        return view('pgtest::form');
    }
}
