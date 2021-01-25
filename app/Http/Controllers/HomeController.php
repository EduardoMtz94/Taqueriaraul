<?php

namespace App\Http\Controllers;

use App\Traits\MetaTagsTrait;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use MetaTagsTrait;

    public function index()
    {
        $metaTagsSeo = $this->getMetaTags();

        return view('index')
            ->with('metaTagsSeo', (object) $metaTagsSeo);
    }
}
