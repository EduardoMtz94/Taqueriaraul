<?php

namespace App\Http\Controllers;

use App\Traits\MenuBebidasTrait;
use App\Traits\MenuPostresTrait;
use App\Traits\MenuTacosTrait;
use App\Traits\MetaTagsTrait;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use MetaTagsTrait;
    use MenuTacosTrait;
    use MenuBebidasTrait;
    use MenuPostresTrait;

    public function index()
    {
        $metaTagsSeo = $this->getMetaTags();
        $tacos = json_decode($this->getTacos());
        $bebidas = json_decode($this->getBebidas());
        $postres = json_decode($this->getPostres());

        return view('index')
            ->with('metaTagsSeo', (object) $metaTagsSeo)
            ->with('tacos', $tacos)
            ->with('bebidas', $bebidas)
            ->with('postres', $postres);
    }
}
