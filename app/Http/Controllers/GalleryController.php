<?php

namespace App\Http\Controllers;

use App\Traits\MetaTagsTrait;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    use MetaTagsTrait;

    public function index()
    {
        $metaTagsSeo = $this->getMetaTags('Taqueria Raul - Galeria');

        return view('gallery')
            ->with('metaTagsSeo', (object) $metaTagsSeo);
    }
}
