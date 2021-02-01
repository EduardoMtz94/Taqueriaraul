<x-master :meta-tags-seo="$metaTagsSeo">
    <section class="lc-gallery">
        <div class="container-xl">
            <div class="row">
                <div class="col-12">
                    <h1><mark>GALER&Iacute;A</mark></h1>
                </div>
            </div>
            <div id="carouselBigGallery" class="carousel slide lc-carousel-big-gallery" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Galeria/1.jpeg" class="d-block mx-auto w-75" alt="Taqueria Raul Galeria Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Galeria/2.jpeg" class="d-block mx-auto w-75" alt="Taqueria Raul Galeria Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Galeria/3.jpeg" class="d-block mx-auto w-75" alt="Taqueria Raul Galeria Imagen 3">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Galeria/4.jpeg" class="d-block mx-auto w-75" alt="Taqueria Raul Galeria Imagen 4">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Galeria/5.jpeg" class="d-block mx-auto w-75" alt="Taqueria Raul Galeria Imagen 5">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Galeria/6.jpeg" class="d-block mx-auto w-75" alt="Taqueria Raul Galeria Imagen 6">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Galeria/7.jpeg" class="d-block mx-auto w-75" alt="Taqueria Raul Galeria Imagen 7">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Galeria/9.jpeg" class="d-block mx-auto w-75" alt="Taqueria Raul Galeria Imagen 9">
                    </div>
                </div>
            </div>

            <div id="carouselGallery" class="carousel slide lc-second-carousel" data-ride="carousel" data-interval="20000">
                <div class="container carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-sm-3 col-md-3">
                            <img src="img/Galeria/1.jpeg" alt="Taqueria Raul Galeria Imagen 1" 
                             data-target="#carouselBigGallery" data-slide-to="0">
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <img src="img/Galeria/2.jpeg" alt="Taqueria Raul Galeria Imagen 2" 
                             data-target="#carouselBigGallery" data-slide-to="1">
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <img src="img/Galeria/3.jpeg" alt="Taqueria Raul Galeria Imagen 3" 
                             data-target="#carouselBigGallery" data-slide-to="2">
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <img src="img/Galeria/4.jpeg" alt="Taqueria Raul Galeria Imagen 4" 
                             data-target="#carouselBigGallery" data-slide-to="3">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-sm-3 col-md-3">
                            <img src="img/Galeria/5.jpeg" alt="Taqueria Raul Galeria Imagen 5" 
                             data-target="#carouselBigGallery" data-slide-to="4">
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <img src="img/Galeria/6.jpeg" alt="Taqueria Raul Galeria Imagen 6" 
                             data-target="#carouselBigGallery" data-slide-to="5">
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <img src="img/Galeria/7.jpeg" alt="Taqueria Raul Galeria Imagen 7" 
                             data-target="#carouselBigGallery" data-slide-to="6">
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <img src="img/Galeria/9.jpeg" alt="Taqueria Raul Galeria Imagen 9" 
                             data-target="#carouselBigGallery" data-slide-to="7">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselGallery" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselGallery" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-master>