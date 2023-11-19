<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function blog(): string
    {
        return view('blog');
    }
}