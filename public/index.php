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
    <main>
        <?php include 'include/hero-section.php'; ?>

        <section class="homepage-about-section">
            <div class="container">
                <div class="row col-12 col-lg-12 mx-auto pb-5">
                    <div class="col-12 col-md-6 px-lg-3 scroll-reveal-right pt-3">
                        <div class="section-heading d-flex flex-column align-items-start justify-content-center h-100">
                            <h2 class="section-title animation-text">BİR YAPIDAN FAZLASI</h2>
                            <h3 class="section-subtitle animation-text fs-3 fw-light">Bir imza, Bir prestij, Bir <b>Majestik</b></h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 scroll-reveal-right">
                        <div class="section-content fw-light">
                            <p>Majestik İnşaat, modern mimari anlayışı, mühendislik disiplini ve yüksek kalite standartlarıyla yaşam alanlarına değer katan projeler üretir. Her yapıyı yalnızca bir bina olarak değil, uzun yıllar güvenle yaşanacak bir yaşam alanı olarak tasarlar.
                            </p>
                            <p>
                                Güçlü teknik altyapısı, deneyimli kadrosu ve yenilikçi yaklaşımıyla Majestik İnşaat; konut, ticari alan ve karma projelerde estetik ile fonksiyonelliği bir araya getirir. Projelerinde dayanıklılığı, sürdürülebilirliği ve çağdaş mimariyi esas alarak sektörde kalıcı bir iz bırakır.
                            </p>
                        </div>
                        <a href="#" class="btn btn-outline-primary text-primary border-primary py-4 px-3">Hakkımızda Daha Fazla Bilgi Edinin</a>
                    </div>
                </div>

                <div class="row g-0 about-us-and-video-area">
                    <div class="col-12 col-lg-6 reveal-3d mx-0 ">
                        <div class="video-box">
                            <img src="./assets/images/about-us-video-image.webp" alt="Majestik İnşaat Tanıtım Videosu" class="img-fluid shadow">
                            <div class="position-absolute">
                                <div class="play-pulse-animation">
                                    <a href="#" class="btn play-button video-play-btn" aria-label="Play Video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="https://www.youtube.com/embed/HdRQ25DCuEM">
                                        <i class="icon-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 reveal-3d mx-0 h-100">
                        <div class="blue-box text-white p-5 px-5 shadow h-100 d-flex flex-column justify-content-center">
                            <div class="content px-md-5 mb-0 fw-light">
                                <p>Majestik İnşaat, modern mimari anlayışı ve güçlü mühendislik altyapısıyla güvenli, kaliteli ve prestijli yapılar üretir. Her projede estetiği, dayanıklılığı ve fonksiyonelliği bir araya getirerek yaşam alanlarına değer katar.</p>
                            </div>
                            <div class="mx-auto position-relative">
                                <div class="scroll-reveal-bottom">
                                    <div class="stats-item">
                                        <h3 class="stats-number">
                                            <output id="statsKm" class="countup" data-value="25">25</output>
                                            +
                                        </h3>
                                        <p class="stats-text">Yıllık Deneyim</p>
                                    </div>
                                    <div class="stats-item">
                                        <h3 class="stats-number">
                                            <output id="" class="countup" data-value="35">35</output>
                                            +
                                        </h3>
                                        <p class="stats-text">PROJEYE ATILAN İMZA</p>
                                    </div>
                                    <div class="stats-item">
                                        <h3 class="stats-number">
                                            <output id="" class="countup" data-value="100">100</output>
                                            +
                                        </h3>
                                        <p class="stats-text">UZMAN ÇALIŞAN</p>
                                    </div>
                                </div>
                            </div>
                            <img src="./assets/images/majestik-icon-layer.webp" alt="" class="bg-right-bottom-icon">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="homepage-projects-section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3">
                        <h2 class="section-title left-line text-primary scroll-reveal-bottom fs-2 mb-3">
                            PROJELER
                        </h2>
                    </div>
                    <div class="col-lg-5 text-end fs-18px fw-light text-dark mb-3">
                        <p>Majestik İnşaat için başarı, yalnızca tamamlanan projelerle değil, kazanılan güven ve memnuniyetle ölçülür. Çünkü biz, geleceği sağlam temeller üzerine inşa ederiz.</p>
                    </div>
                </div>
                <div class="row reveal-3d">
                    <div class="col-lg-12">
                        <div id="carouselProjects" class="carousel slide carouselProjects" data-bs-touch="true" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="proje-detay.php" class="carousel-project-link">
                                        <img src="./assets/images/hero-BeykozPrive.webp" class="img-fluid" alt="...">
                                        <button class="next-prev-btn">
                                            <i class="icon-arrow-right"></i>
                                        </button>
                                        <h3 class="position-absolute top-0 z-1 px-4 py-4 text-white fs-1">Beykoz Prive</h3>
                                        <div class="position-relative left-bottom-image">
                                            <img src="./assets/images/beykoz-prive.webp" alt="" class="z-1 position-absolute bottom-0 start-5 mx-4 py-4 w-auto h-auto">
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="proje-detay.php" class="carousel-project-link">
                                        <img src="./assets/images/BeykozPrive_24.webp" class="img-fluid" alt="...">
                                        <button class="next-prev-btn">
                                            <i class="icon-arrow-right"></i>
                                        </button>
                                        <h3 class="position-absolute top-0 z-1 px-4 py-4 text-white fs-1">Beykoz Prive 2</h3>
                                        <div class="position-relative left-bottom-image">
                                            <img src="./assets/images/beykoz-prive.webp" alt="" class="z-1 position-absolute bottom-0 start-5 mx-4 py-4 w-auto h-auto">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="position-absolute top-50 end-minus-4 pointer-events-none">
                                <div class="carousel-controls">
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProjects" data-bs-slide="next">
                                        <i class="icon-arrow-right"></i>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="homepage-services-section">
            <div class="container position-relative overflow-hidden">
                <div class="row g-0 position-relative z-1 overflow-hidden reveal-3d">
                    <div class="services-bg-image">
                        <img src="./assets/images/modern-skyscraper-architecture-dusk.webp" alt="Majestik İnşaat Hizmetler" class="img-fluid">
                    </div>
                    <div class="col-lg-6 px-5 d-flex align-items-center justify-content-center services-left">
                        <div class="services-content scroll-reveal-left mt-5 mt-lg-0">
                            <h2 class="services-title">HİZMETLER</h2>
                            <div class="services-description">
                                <p>Majestik İnşaat, projelerinde kalite, güven ve profesyonel yönetim anlayışını esas alarak uçtan uca çözümler sunar. Anahtar teslim proje yönetiminden konut ve ticari yapı inşaatına, taahhüt hizmetlerinden kentsel dönüşüm uygulamalarına kadar tüm süreçleri planlı, kontrollü ve yüksek mühendislik standartlarında yürütür.</p>
                                <p>Her projede estetik mimariyi sağlam yapı teknikleriyle birleştirir, yatırım değerini artıran, uzun ömürlü ve prestijli yapılar üretir. Majestik İnşaat için hizmet, yalnızca inşa etmek değil; güven inşa etmek, kaliteyi sürdürülebilir kılmak ve yaşam alanlarına gerçek değer kazandırmaktır.</p>
                            </div>
                            <a href="#" class="btn-services mt-4">Hizmetlerimizi İnceleyin</a>
                        </div>
                    </div>

                    <div class="col-lg-6 services-right p-5 d-flex flex-column justify-content-center scroll-reveal-right">
                        <div class="row">
                            <div class="col-lg-9 mx-auto">
                                <div class="service-list">
                                    <div class="service-item">
                                        <h3>Anahtar Teslim Proje Yönetimi</h3>
                                        <p>Projelendirmeden uygulamaya kadar tüm süreci tek elden, planlı ve kontrollü şekilde yönetiriz.</p>
                                    </div>

                                    <div class="service-item">
                                        <h3>Konut ve Ticari Yapı İnşaatı</h3>
                                        <p>Konut, ofis ve ticari alan projelerinde yüksek kalite standartlarında yapılar inşa ederiz.</p>
                                    </div>

                                    <div class="service-item">
                                        <h3>Taahhüt ve Uygulama Hizmetleri</h3>
                                        <p>Kamu ve özel sektör projelerinde teknik şartnamelere tam uyumlu profesyonel uygulamalar gerçekleştiririz.</p>
                                    </div>

                                    <div class="service-item">
                                        <h3>Kentsel Dönüşüm ve Yapı Yenileme</h3>
                                        <p>Mevcut yapıların güvenli, modern ve yönetmeliklere uygun şekilde yeniden kazandırılmasını sağlarız.</p>
                                    </div>

                                    <div class="service-item">
                                        <h3>Mimari, Mühendislik ve Proje Danışmanlığı</h3>
                                        <p>Estetik, statik güvenlik ve yatırım verimliliğini bir arada sunan bütüncül çözümler üretiriz.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news-section py-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <h2 class="section-title left-line text-primary scroll-reveal-bottom">
                        ÖNE ÇIKAN HABERLER
                    </h2>
                    <a href="#" class="btn btn-outline-primary text-primary border-primary px-5 py-3">
                        Tüm Haberler
                    </a>
                </div>
                <div class="row align-items-center row-gap-5">
                    <div class="col-lg-4 scroll-reveal-left">
                        <div class="card">
                            <img src="./assets/images/18879.webp" class="card-img-top" alt="">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="icon-arrow-right"></i>
                                </div>
                                <div class="card-content">
                                    <a href="#" class="stretched-link">
                                        <h5 class="card-title mb-3">Majestİk İnşaat’tan Şehİr
                                            Sİluetİne Değer Katan Yenİ Proje</h5>
                                    </a>
                                    <p class="card-text">Her projede estetik mimariyi sağlam yapı teknikleriyle birleştirir, yatırım değerini artıran, uzun ömürlü ve prestijli yapılar üretir. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 scroll-reveal-bottom">
                        <div class="card">
                            <img src="./assets/images/111032.webp" class="card-img-top" alt="">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="icon-arrow-right"></i>
                                </div>
                                <div class="card-content">
                                    <a href="#" class="stretched-link">
                                        <h5 class="card-title mb-3">Majestİk İnşaat’tan Şehİr
                                            Sİluetİne Değer Katan Yenİ Proje</h5>
                                    </a>
                                    <p class="card-text">Her projede estetik mimariyi sağlam yapı teknikleriyle birleştirir, yatırım değerini artıran, uzun ömürlü ve prestijli yapılar üretir. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 scroll-reveal-right">
                        <div class="card">
                            <img src="./assets/images/111032.webp" class="card-img-top" alt="">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="icon-arrow-right"></i>
                                </div>
                                <div class="card-content">
                                    <a href="#" class="stretched-link">
                                        <h5 class="card-title mb-3">Majestİk İnşaat’tan Şehİr
                                            Sİluetİne Değer Katan Yenİ Proje</h5>
                                    </a>
                                    <p class="card-text">Her projede estetik mimariyi sağlam yapı teknikleriyle birleştirir, yatırım değerini artıran, uzun ömürlü ve prestijli yapılar üretir. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'include/footer.html'; ?>
</body>

</html>