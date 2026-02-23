<?php require_once 'init.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>

    <main class="sub-page">

        <section class="hero">
            <div id="carouselSlider" class="carousel slide">
                <div class="carousel-inner black-effect">
                    <div class="carousel-item active" data-type="image" data-interval="10000">
                        <img src="./assets/images/BeykozPrive_(15).webp" alt="" class="img-fluid">
                        <div class="carousel-caption text-start">
                            <div class="container p-0">
                                <div class="row align-items-center col-lg-10 mx-auto">
                                    <div class="col-lg-10 scroll-reveal-left">
                                        <div class="hero-heading">
                                            <h1 class="hero-subtitle order-2 text-uppercase">
                                                <?= $_GET['title'] ?>
                                            </h1>
                                            <h2 class="hero-title order-1">PROJELER</h2>
                                        </div>
                                        <div class="hero-description mt-4 mt-lg-0">
                                            <div class="col-lg-8 col-11">
                                                <div class="carousel-content">
                                                    <p>Kalite, güven ve titiz uygulama anlayışıyla inşası devam eden projelerimizle geleceğin yaşam alanlarını şekillendiriyoruz.</p>
                                                </div>
                                            </div>
                                            <div class="row gap-3 px-3">
                                                <a href="#" class="btn btn-outline-primary py-3 px-1">
                                                    <span class="px-4">Projelerimiz</span>
                                                    <i class="icon-arrow-right ms-2"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary py-3 px-1">
                                                    <span class="px-4">Bizimle İletişime Geçin</span>
                                                    <i class="icon-arrow-right ms-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects-section py-5">
            <div class="container">

                <div class="row reveal-3d">
                    <div class="col-lg-4">
                        <div class="project-item three-column animation-hover mb-4">
                            <a href="proje-detay.php">
                                <img src="./assets/images/hero-BeykozPrive.webp" class="img-fluid" alt="...">
                                <button class="right-button">
                                    <i class="icon-arrow-right"></i>
                                </button>
                                <h3 class="position-absolute top-0 z-1 px-4 py-4 text-white fs-1">Beykoz Prive 2</h3>
                                <div class="position-relative left-bottom-image">
                                    <img src="./assets/images/beykoz-prive.webp" alt="" class="z-1 position-absolute bottom-0 start-5 mx-4 py-4 w-auto h-auto">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row reveal-3d mt-3">
                    <div class="col-lg-12">
                        <div class="project-item">
                            <a href="proje-detay.php">
                                <img src="./assets/images/hero-BeykozPrive.webp" class="img-fluid" alt="...">
                                <button class="right-button">
                                    <i class="icon-arrow-right"></i>
                                </button>
                                <h3 class="position-absolute top-0 z-1 px-4 py-4 text-white fs-1">Beykoz Prive 2</h3>
                                <div class="position-relative left-bottom-image">
                                    <img src="./assets/images/beykoz-prive.webp" alt="" class="z-1 position-absolute bottom-0 start-5 mx-4 py-4 w-auto h-auto">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row reveal-3d mb-5 mt-5">
                    <div class="project-item">
                        <a href="proje-detay.php">
                            <img src="./assets/images/BeykozPrive_(15).webp" class="img-fluid" alt="...">
                            <button class="right-button">
                                <i class="icon-arrow-right"></i>
                            </button>
                            <h3 class="position-absolute top-0 z-1 px-4 py-4 text-white fs-1">Beykoz Prive 2</h3>
                            <div class="position-relative left-bottom-image">
                                <img src="./assets/images/beykoz-prive.webp" alt="" class="z-1 position-absolute bottom-0 start-5 mx-4 py-4 w-auto h-auto">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row reveal-3d mb-5 mt-5">
                    <div class="project-item">
                        <a href="proje-detay.php">
                            <img src="./assets/images/BeykozPrive_(15).webp" class="img-fluid" alt="...">
                            <button class="right-button">
                                <i class="icon-arrow-right"></i>
                            </button>
                            <h3 class="position-absolute top-0 z-1 px-4 py-4 text-white fs-1">Beykoz Prive 2</h3>
                            <div class="position-relative left-bottom-image">
                                <img src="./assets/images/beykoz-prive.webp" alt="" class="z-1 position-absolute bottom-0 start-5 mx-4 py-4 w-auto h-auto">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row reveal-3d mb-5 mt-5">
                    <div class="project-item">
                        <a href="proje-detay.php">
                            <img src="./assets/images/BeykozPrive_28.webp" class="img-fluid" alt="...">
                            <button class="right-button">
                                <i class="icon-arrow-right"></i>
                            </button>
                            <h3 class="position-absolute top-0 z-1 px-4 py-4 text-white fs-1">Beykoz Prive 2</h3>
                            <div class="position-relative left-bottom-image">
                                <img src="./assets/images/beykoz-prive.webp" alt="" class="z-1 position-absolute bottom-0 start-5 mx-4 py-4 w-auto h-auto">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row scroll-reveal-bottom mx-auto text-center mt-5">
                    <a href="#" class="btn btn-outline-primary py-3 px-4 text-center mx-auto text-primary"> Daha Fazla Göster </a>
                </div>
            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>

</body>

</html>