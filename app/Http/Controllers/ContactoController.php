<?php

namespace App\Http\Controllers;

use App\Traits\MetaTagsTrait;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    use MetaTagsTrait;

    public function index()
    {
        $metaTagsSeo = $this->getMetaTags(
            '- Contactanos mediantes nuestras redes sociales, también, puedes hacer tu pedido en las mismas'
        );

        return view('contacto')
            ->with('metaTagsSeo', (object) $metaTagsSeo);
    }
}
