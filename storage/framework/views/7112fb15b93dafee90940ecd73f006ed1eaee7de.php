<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="<?php echo e(asset('web/css/templatemo-style.css')); ?>" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <!-- Top box -->
    <!-- Logo & Site Name -->
    <div class="placeholder">
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo e(asset('imagenes/image_web3.jpeg')); ?>">
            <div class="tm-header">
                <div class="row tm-header-inner">
                    <div class="col-md-6 col-12">

                        <div class="tm-site-text-box">
                            <h1 class="tm-site-title" style="color: #FAFA00; font-size: 60px;font-family: 'Kaushan Script', cursive;">Recreo Restaurant </h1>
                            <h6 class="tm-site-title" style="color: whitesmoke; font-size: 70px;font-family: 'Kaushan Script', cursive;">La Colpa</h6>
                        </div>
                    </div>
                    <nav class="col-md-6 col-12 tm-nav">
                        <ul class="tm-nav-ul">
                            <li class="tm-nav-li"><a style="color: #FAFA00" href="index.html" class="tm-nav-link active">Inicio</a></li>
                            <li class="tm-nav-li"><a style="color: #FAFA00" href="about.html" class="tm-nav-link">Nosotros</a></li>
                            <li class="tm-nav-li"><a style="color: #FAFA00" href="contact.html" class="tm-nav-link">Contactos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #FAFA00;padding: 10px">
        <h2 class="col-12 text-center tm-section-title" style="font-family:Helvetica Neue ">Bienvenido a la Colpa, donde puedes hacer tus pedidos al instante</h2>
    </div>
    <main style="background-color: white">
        <div class="tm-paging-links">
            <nav>
                <ul>
                    <li class="tm-paging-item"><a href="#" class="tm-paging-link active">Platos</a></li>
                    <li class="tm-paging-item"><a href="#" class="tm-paging-link">Bebidas</a></li>
                    <li class="tm-paging-item"><a href="#" class="tm-paging-link">Postres</a></li>
                </ul>
            </nav>
        </div>
        <div class="row" style="padding: 10px">
            <?php $__currentLoopData = $platos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="col-md-4  tm-gallery-item " style="width: 100%;">
                    <figure style="border: 1px #0ba1b5 solid;background-color: #A2D9CE;border-radius: 10px">
                        <img src="<?php echo e($plato->imagen); ?>" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption style="text-align: center">
                            <h4 class="tm-gallery-title"><?php echo e($plato->nombre); ?></h4>
                            <p class="tm-gallery-description"><?php echo e($plato->descripcion); ?></p>
                            <p class="tm-gallery-price"><?php echo e($plato->precio); ?></p>
                        </figcaption>
                    </figure>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Gallery -->
        <div class="row tm-gallery">
            <!-- gallery page 1 -->
            <div id="tm-gallery-page-pizza" class="tm-gallery-page">

            </div> <!-- gallery page 1 -->

            <!-- gallery page 2 -->
            <div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Salad Menu One</h4>
                            <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                            <p class="tm-gallery-price">$25</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Second Title Salad</h4>
                            <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                            <p class="tm-gallery-price">$30</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Third Salad Item</h4>
                            <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                            <p class="tm-gallery-price">$45</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Superior Salad</h4>
                            <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                            <p class="tm-gallery-price">$50</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Sed ultricies dui</h4>
                            <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                            <p class="tm-gallery-price">$55 / $60</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Maecenas eget justo</h4>
                            <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                            <p class="tm-gallery-price">$75</p>
                        </figcaption>
                    </figure>
                </article>
            </div> <!-- gallery page 2 -->

            <!-- gallery page 3 -->
            <div id="tm-gallery-page-noodle" class="tm-gallery-page hidden">
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Noodle One</h4>
                            <p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <p class="tm-gallery-price">$12.50</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Noodle Second</h4>
                            <p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <p class="tm-gallery-price">$15.50</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Third Soft Noodle</h4>
                            <p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <p class="tm-gallery-price">$20.50</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Aliquam sagittis</h4>
                            <p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <p class="tm-gallery-price">$30.25</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Maecenas eget justo</h4>
                            <p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <p class="tm-gallery-price">$35.50</p>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Quisque et felis eros</h4>
                            <p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <p class="tm-gallery-price">$40.50</p>
                        </figcaption>
                    </figure>
                </article>

            </div> <!-- gallery page 3 -->
        </div>
        <div class="tm-section tm-container-inner">
            <div class="row">
                <div class="col-md-6">
                    <figure class="tm-description-figure">
                        <img src="img/img-01.jpg" alt="Image" class="img-fluid" />
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="tm-description-box">
                        <h4 class="tm-gallery-title">Maecenas nulla neque</h4>
                        <p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p>
                        <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="tm-footer text-center">
        <p>Copyright &copy; 2020 Simple House

            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
    </footer>
</div>
<script src="<?php echo e(asset('web/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('web/js/parallax.min.js')); ?>"></script>
<script>
    $(document).ready(function(){
        // Handle click on paging links
        $('.tm-paging-link').click(function(e){
            e.preventDefault();

            var page = $(this).text().toLowerCase();
            $('.tm-gallery-page').addClass('hidden');
            $('#tm-gallery-page-' + page).removeClass('hidden');
            $('.tm-paging-link').removeClass('active');
            $(this).addClass("active");
        });
    });
</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\proyectosistemasinformacion\app-rrhh\resources\views/web/index.blade.php ENDPATH**/ ?>