<?php
namespace App\Traits;

use Illuminate\Support\Facades\URL;

trait MetaTagsTrait {
    public function getMetaTags($description = '')
    {
        $desc = 'Taqueria Raul - Calle Pablo Valdez 3348, Tetlán, 44820 Guadalajara, Jal. ';
        $desc .= $description;
        $metaTagsSeo = [];
        $metaTagsSeo['canonical'] = URL::current();
        $metaTagsSeo['description'] = $desc;
        $metaTagsSeo['keywords'] = 'tacos a domicilio, tacos a domicilio cerca de mi, tacos a domicilio cerca de mi ubicacion, 
        tacos en guadalajara, tacos al pastor en guadalajara, tacos en tetlan guadalajara, tacos al pastor,
        taqueria en guadalajara, taqueria en pablo valdez, tacos en pablo valdez, tacos en pablo valdez tetlan';
        $metaTagsSeo['robots'] = 'index,follow';
        // Metatags Open Graph (Google y Facebook)
        $metaTagsSeo['ogType'] = 'website';
        $metaTagsSeo['ogTitle'] = env('APP_NAME', 'Taqueria Raul');
        $metaTagsSeo['ogDescription'] = $metaTagsSeo['description'];
        $metaTagsSeo['ogImage'] = URL::asset('img/logo-don-raul.svg');
        $metaTagsSeo['ogUrl'] = $metaTagsSeo['canonical'];
        // Metatags Twitter
        $metaTagsSeo['twitter_card'] = 'summary';
        $metaTagsSeo['twitter_creator'] = '@AlemanEMS';
        $metaTagsSeo['twitter_description'] = $metaTagsSeo['description'];
        $metaTagsSeo['twitter_image'] = $metaTagsSeo['ogImage'];
        $metaTagsSeo['twitter_title'] = $metaTagsSeo['ogTitle'];

        return $metaTagsSeo;
    }
}