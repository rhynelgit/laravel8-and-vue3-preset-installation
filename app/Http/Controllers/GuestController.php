<?php

namespace App\Http\Controllers;

class GuestController 
{
    public function __invoke()
    {
        return view('welcome');
    }
}