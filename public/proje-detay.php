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
                <div class="carousel-inner">
                    <div class="carousel-item active" data-type="image" data-interval="10000">
                        <img src="./assets/images/BeykozPrive_(15).webp" alt="" class="img-fluid">
                        <div class="carousel-caption text-start">
                            <div class="container">
                                <div class="row align-items-center col-lg-10 mx-auto">
                                    <div class="col-lg-10 scroll-reveal-left">
                                        <div class="hero-heading">
                                            <h1 class="hero-subtitle order-3">Beykoz Prive</h1>
                                            <img src="./assets/images/beykoz-prive.webp" alt="Beykoz Prive Logo" width="185" height="80" class="hero-logo">
                                            <h2 class="hero-title order-1">Devam Eden Projeler</h2>
                                        </div>
                                        <div class="hero-description mt-4 mt-lg-0">
                                            <div class="col-lg-8 col-12">
                                                <div class="carousel-content">
                                                    <p>
                                                        Modern mimarisi, seçkin konumu ve yüksek yaşam standartlarıyla ayrıcalıklı bir yaşam sunan prestijli bir konut projesidir.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gap-3 px-3">
                                            <a href="#" class="btn btn-outline-primary py-3 px-1">
                                                <span class="px-4">Proje Hakkında Bilgi Al</span>
                                                <i class="icon-arrow-right ms-2"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-primary py-3 px-1">
                                                <span class="px-4">Proje Web Sitesi</span>
                                                <i class="icon-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="play-pulse-animation">
                                            <a href="#" class="btn play-button" aria-label="Play Video" data-bs-toggle="modal" data-bs-target="#videoModal">
                                                <i class="icon-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="homepage-projects-section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto mx-auto">
                        <h3 class="section-title left-line right-line text-primary scroll-reveal-bottom mb-4 fw-bold fs-2">
                            GALERİ
                        </h3>
                    </div>
                </div>
                <div class="row reveal-3d">
                    <div class="col-lg-12">
                        <div id="carouselProjects" class="carousel slide carouselProjects" data-bs-touch="true" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/images/BeykozPrive_24.webp" class="img-fluid" alt="...">
                                    <button class="zoom-button zoom-trigger" aria-label="Zoom Image">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11M13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0" />
                                            <path d="M10.344 11.742q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1 6.5 6.5 0 0 1-1.398 1.4z" />
                                            <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/hizmet-banner.webp" class="img-fluid" alt="...">
                                    <button class="zoom-button zoom-trigger" aria-label="Zoom Image">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11M13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0" />
                                            <path d="M10.344 11.742q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1 6.5 6.5 0 0 1-1.398 1.4z" />
                                            <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/hizmet-banner.webp" class="img-fluid" alt="...">
                                    <button class="zoom-button zoom-trigger" aria-label="Zoom Image">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11M13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0" />
                                            <path d="M10.344 11.742q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1 6.5 6.5 0 0 1-1.398 1.4z" />
                                            <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/hizmet-banner.webp" class="img-fluid" alt="...">
                                    <button class="zoom-button zoom-trigger" aria-label="Zoom Image">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11M13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0" />
                                            <path d="M10.344 11.742q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1 6.5 6.5 0 0 1-1.398 1.4z" />
                                            <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/hizmet-banner.webp" class="img-fluid" alt="...">
                                    <button class="zoom-button zoom-trigger" aria-label="Zoom Image">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11M13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0" />
                                            <path d="M10.344 11.742q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1 6.5 6.5 0 0 1-1.398 1.4z" />
                                            <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5" />
                                        </svg>
                                    </button>
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

        <section class="product-detail-section wapper py-5" id="urun-detay-2">
            <div class="container">

                <div class="row justify-content-between align-items-center mb-5 mt-5">
                    <div class="row col-lg-10 col-11 mx-auto d-flex justify-content-between align-items-center">

                        <div class="col-lg-6">
                            <h3 class="section-title text-center text-primary scroll-reveal-top mb-4 fw-bold fs-2">
                                PROJE HAKKINDA
                            </h3>
                            <div class="content scroll-reveal-left">
                                <p>
                                    Beykoz Prive, modern mimari anlayışı ile doğayla iç içe, sakin ve prestijli bir yaşam sunmak amacıyla tasarlanmış özel bir konut projesidir. Şehrin karmaşasından uzak, huzurlu bir atmosferde konumlanan proje; estetik, konfor ve güvenliği bir araya getirerek yüksek yaşam standartlarını hedefler.</p>

                                <p>Projede, fonksiyonel planlamaya sahip geniş ve ferah daireler, doğal ışığı maksimum seviyede alan mimari tasarımlar ile kullanıcıların konforu ön planda tutulmuştur. Kaliteli yapı malzemeleri, sağlam yapı teknikleri ve modern inşaat teknolojileri kullanılarak uzun ömürlü ve güvenli bir yapı anlayışı benimsenmiştir.</p>

                                <p>Beykoz Prive, sadece bir konut projesi değil, aynı zamanda sosyal yaşamı destekleyen bir yaşam alanıdır. Peyzaj düzenlemeleri, dinlenme alanları ve sosyal donatılarıyla sakinlerine huzurlu ve ayrıcalıklı bir yaşam ortamı sunar. Doğayla uyumlu mimarisi sayesinde hem estetik bir görünüm sağlar hem de yaşam kalitesini yükseltir.</p>

                                <p>Proje, ulaşım kolaylığı ve merkezi noktalara yakınlığıyla günlük hayatın tüm ihtiyaçlarına hızlı erişim imkânı sunarken, bulunduğu bölgenin prestijli yapısı sayesinde yüksek yatırım değeri taşır. Bu özelliğiyle hem oturum hem de yatırım amacıyla tercih edilebilecek güçlü bir projedir.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="project-specs list-unstyled">
                                <li>
                                    <b>Proje Adı:</b>
                                    <span>Beykoz Prive</span>
                                </li>
                                <li>
                                    <b>Proje Türü:</b>
                                    <span>Konut Projesi</span>
                                </li>
                                <li>
                                    <b>Konum:</b>
                                    <span>Beykoz / İstanbul</span>
                                </li>
                                <li>
                                    <b>Proje Durumu:</b>
                                    <span>Devam Eden Proje</span>
                                </li>
                                <li>
                                    <b>Mimari Stil:</b>
                                    <span>Modern ve Prestijli</span>
                                </li>
                                <li>
                                    <b>Yapı Türü:</b>
                                    <span>Lüks Konut</span>
                                </li>
                                <li>
                                    <b>Daire Tipleri:</b>
                                    <span>2+1, 3+1, 4+1 (opsiyonel)</span>
                                </li>
                                <li>
                                    <b>Yapı Özelliği:</b>
                                    <span>Deprem yönetmeliğine uygun, yüksek dayanımlı yapı sistemi</span>
                                </li>
                                <li>
                                    <b>Sosyal Alanlar:</b>
                                    <span>Peyzaj alanları, dinlenme alanları, otopark</span>
                                </li>
                                <li>
                                    <b>Mimari Avantaj:</b>
                                    <span>Geniş ve ferah yaşam alanları, doğal ışık alan tasarım</span>
                                </li>
                                <li>
                                    <b>Güvenlik:</b>
                                    <span>7/24 güvenlik altyapısına uygun proje planlaması</span>
                                </li>
                                <li>
                                    <b>Yatırım Değeri:</b>
                                    <span>Yüksek, uzun vadede değer kazanan proje</span>
                                </li>
                                <li>
                                    <b>Teslim Durumu:</b>
                                    <span>Planlanan tarihte teslim hedefi</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="homepage-projects-section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto mx-auto">
                        <h3 class="section-title left-line right-line text-primary scroll-reveal-bottom mb-4 fw-bold fs-2">
                            DEVAM EDEN PROJELER
                        </h3>
                    </div>
                </div>
                <div class="row reveal-3d">
                    <div class="col-lg-12">
                        <div id="carouselProjects2" class="carousel slide carouselProjects" data-bs-touch="true" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselProjects2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselProjects2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/images/hero-BeykozPrive.webp" class="img-fluid" alt="...">
                                    <a href="proje-detay.php" class="stretched-link carousel-project-link">
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/BeykozPrive_24.webp" class="img-fluid" alt="...">
                                    <a href="proje-detay.php" class="stretched-link carousel-project-link">
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="position-absolute top-50 end-minus-4 pointer-events-none">
                                <div class="carousel-controls">
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProjects2" data-bs-slide="next">
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

    </main>

    <?php include 'include/footer.html'; ?>

</body>

</html>