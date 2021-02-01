<?php

namespace App\Http\Controllers;

use App\Traits\MetaTagsTrait;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    use MetaTagsTrait;

    public function index()
    {
        $metaTagsSeo = $this->getMetaTags('Taqueria Raul - Pagina de contacto');

        return view('contacto')
            ->with('metaTagsSeo', (object) $metaTagsSeo);
    }
}
