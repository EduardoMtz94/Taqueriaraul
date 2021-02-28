<x-master :meta-tags-seo="$metaTagsSeo">
    <header>
        <div class="container-xl">
            <div class="row lc-height">
                <div class="col-sm-12 col-md-12 col-lg-6 align-self-center">
                    <h1>TAQUER&Iacute;A <span class="raul">RA&Uacute;L</span></h1>
                    <p>Desde hace mas de 40 a&ntilde;os, somos representantes de una de las comidas m&aacute;s representativas de M&eacute;xico, 
                        nos respalda la calidad en nuestros tacos, adem&aacute;s de un gran sabor que se disfruta en cada mordida. </p>
                    <div class="lc-haz-tu-pedido">
                        <p>HAZ TU PEDIDO</p>
                        <span class="arrow" id="lc-arrow-header"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="menu" id="menu">
        <section class="lc-tacos" id="lc-tacos">
            <div class="container-xl">
                <div class="row lc-tacos-row">
                    <div class="col-8 col-md-10">
                        <h2><mark>Tacos</mark> 
                            <a class="btn lc-collapse" data-toggle="collapse" href="#collapseTacos" role="button" aria-expanded="false" aria-controls="collapseTacos" id="lc-btn-collapse" data-icon="#lc-icon-collapse-tacos">
                                <img src="img/up.svg" alt="Icono collapse" class="lc-icon-collapse" id="lc-icon-collapse-tacos" width="40px">
                            </a>
                        </h2>
                    </div>
                    <div class="col-4 col-md-2 d-flex flex-column text-right">
                        <p class="lc-productos-sujetos-a mt-auto">Productos sujetos a existencia*</p>
                    </div>
                    <div class="col-12">
                        <div class="collapse show px-4" id="collapseTacos">
                            <div class="row">
                                @foreach ($tacos as $taco)
                                    <x-basic-card :product="$taco"/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lc-lonches" id="lc-lonches">
            <div class="container-xl">
                <div class="row lc-lonches-row">
                    <div class="col-12">
                        <h2><mark>Lonches</mark> 
                            <a class="btn lc-collapse" data-toggle="collapse" href="#collapseLonches" role="button" aria-expanded="false" aria-controls="collapseLonches" id="lc-btn-collapse" data-icon="#lc-icon-collapse-lonches">
                                <img src="img/up.svg" alt="Icono collapse" class="lc-icon-collapse" id="lc-icon-collapse-lonches" width="40px">
                            </a>
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="collapse show px-4" id="collapseLonches">
                            <div class="row">
                                <x-lonche-card />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lc-gringas" id="lc-gringas">
            <div class="container-xl">
                <div class="row lc-gringas-row">
                    <div class="col-12">
                        <h2><mark>Gringas</mark> 
                            <a class="btn lc-collapse" data-toggle="collapse" href="#collapseGringas" role="button" aria-expanded="false" aria-controls="collapseGringas" id="lc-btn-collapse" data-icon="#lc-icon-collapse-gringas">
                                <img src="img/up.svg" alt="Icono collapse" class="lc-icon-collapse" id="lc-icon-collapse-gringas" width="40px">
                            </a>
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="collapse show px-4" id="collapseGringas">
                            <div class="row">
                                <x-gringa-card />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lc-ordenes" id="lc-ordenes">
            <div class="container-xl">
                <div class="row lc-ordenes-row">
                    <div class="col-12">
                        <h2><mark>Ordenes</mark> 
                            <a class="btn lc-collapse" data-toggle="collapse" href="#collapseOrdenes" role="button" aria-expanded="false" aria-controls="collapseOrdenes" id="lc-btn-collapse" data-icon="#lc-icon-collapse-ordenes">
                                <img src="img/up.svg" alt="Icono collapse" class="lc-icon-collapse" id="lc-icon-collapse-ordenes" width="40px">
                            </a>
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="collapse show px-4" id="collapseOrdenes">
                            <div class="row">
                                <x-ordenes-card />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lc-bebidas" id="lc-bebidas">
            <div class="container-xl">
                <div class="row lc-bebidas-row">
                    <div class="col-12">
                        <h2><mark>Bebidas</mark> 
                            <a class="btn lc-collapse" data-toggle="collapse" href="#collapseBebidas" role="button" aria-expanded="false" aria-controls="collapseBebidas" id="lc-btn-collapse" data-icon="#lc-icon-collapse-bebidas">
                                <img src="img/up.svg" alt="Icono collapse" class="lc-icon-collapse" id="lc-icon-collapse-bebidas" width="40px">
                            </a>
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="collapse show px-4" id="collapseBebidas">
                            <div class="row">
                                @foreach ($bebidas as $bebida)
                                    <x-bebidas-card :product="$bebida"/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lc-postres" id="lc-postres">
            <div class="container-xl">
                <div class="row lc-postres-row">
                    <div class="col-12">
                        <h2><mark>Postres</mark> 
                            <a class="btn lc-collapse" data-toggle="collapse" href="#collapsePostres" role="button" aria-expanded="false" aria-controls="collapsePostres" id="lc-btn-collapse" data-icon="#lc-icon-collapse-postres">
                                <img src="img/up.svg" alt="Icono collapse" class="lc-icon-collapse" id="lc-icon-collapse-postres" width="40px">
                            </a>
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="collapse show px-4" id="collapsePostres">
                            <div class="row">
                                @foreach ($postres as $postre)
                                    <x-basic-card :product="$postre"/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="lc-pedido" id="lc-pedido">
        <div class="container-xl">
            <div class="row">
                <div class="col-12 d-flex lc-title">
                    <img src="img/logo-don-raul.svg" width="75" alt="Logo Secundario Taqueria Raul">
                    <h2 class="pl-4 align-self-end">Como hacer tu pedido</h2>
                </div>
            </div>
            <div class="row lc-pedido-row-2">
                <div class="col-sm-12 col-md-4">
                    <div class="card lc-pedido-card">
                        <div class="lc-icon">
                            <img src="img/cellphone.svg" width="75" alt="Celular pedido Taqueria Raul">
                        </div>
                        <div class="card-body lc-pedido-card-body">
                            <h5 class="card-title">Paso 1.</h5>
                            <p class="card-text lc-first-card-text">
                                Ingresa a Facebook, Whatsapp o por t&eacute;lefono, env&iacute;a un mensaje y sigue las instrucciones.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card lc-pedido-card">
                        <div class="lc-icon-cooking">
                            <img src="img/cooking.svg" width="100" alt="Cocinando pedido Taqueria Raul">
                        </div>
                        <div class="card-body lc-pedido-card-body">
                            <h5 class="card-title">Paso 2.</h5>
                            <p class="card-text">
                                Una vez que nos env&iacute;es tu mensaje nuestro asistente virtual te guiara para realizar tu pedido.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card lc-pedido-card">
                        <div class="lc-icon-deliver-man">
                            <img src="img/deliver-man.svg" width="75" alt="Repartidor pedido Taqueria Raul">
                        </div>
                        <div class="card-body lc-pedido-card-body">
                            <h5 class="card-title">Paso 3.</h5>
                            <p class="card-text">
                                Espera tu orden, nuestro equipo estar&aacute; pendiente del progreso de tu pedido y te dar&aacute; la informaci&oacute;n necesaria.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row lc-cuota-servicio-row">
                <div class="col-12">
                    <p>Cuota por servicio de envío $10.00 pesos</p>
                </div>
            </div>
            <div class="row lc-cuota-servicio-row">
                <div class="col-12">
                    <p>Servicio a domicilio GRATIS en pedidos mayores a $200.00</p>
                </div>
            </div>
        </div>
    </section>
</x-master>