<?php

namespace App\Http\Controllers;

use App\Traits\MetaTagsTrait;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    use MetaTagsTrait;

    public function index()
    {
        $metaTagsSeo = $this->getMetaTags('- Ve mas sobre nosotros aqui, en nuestra galeria');

        return view('gallery')
            ->with('metaTagsSeo', (object) $metaTagsSeo);
    }
}
