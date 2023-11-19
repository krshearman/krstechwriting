<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function test(): string
    {
        return view('pages/welcome_message');
    }
}