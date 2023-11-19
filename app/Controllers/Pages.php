<?php

namespace App\Controllers;
class Pages extends BaseController
{
    public function pages($page = 'welcome_message'): string
    {
        return view('pages/'.$page);
    }
}
