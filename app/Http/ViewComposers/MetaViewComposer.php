<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

class MetaViewComposer
{
    public function compose(View $view)
    {
        $view->with('metaTitle', ucfirst(Request::segment(count(Request::segments()))));
    }
}
