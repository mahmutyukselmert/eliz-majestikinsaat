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
        <section class="page-header">
            <div class="page-header__bg"></div>
            <div class="page-header__overlay"></div>

            <div class="container page-header__content">
                <h1 class="hero-title"><?= $_GET['title'] ?></h1>
                <h2 class="hero-subtitle">Eliz Vip Transfer</h2>
            </div>
        </section>

        <section class="wrapper service-detail-section py-5">
            <div class="container">
                <div class="row align-items-center col-md-12 mx-auto justify-content-between">
                    <div class="col-md-6 scroll-reveal-left">
                        <div class="hero-description mt-4 mt-lg-0">
                            <div class="col-lg-12 col-12">
                                <h3 class="text-primary mb-5"><?= $_GET['title'] ?> Hizmetimizde Neler Sunuyoruz? </h3>
                                <div class="content">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste quis veritatis libero obcaecati incidunt natus inventore vero perspiciatis quibusdam eligendi nisi rem molestias debitis minus ea, odio est porro placeat.</p>
                                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit delectus alias soluta quos consequuntur! Incidunt excepturi voluptatum officia magnam expedita, tempora debitis inventore exercitationem quidem? Ut quos fugit explicabo accusamus?</p>
                                </div>
                                <div class="row">
                                    <div class="col-auto mt-4">
                                        <a href="#faq-section" class="btn btn-outline-primary rounded-full w-100 "> Aklıma Takılan Sorular Var? </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-11 mt-5 mt-md-0">

                        <div class="row position-relative">
                            <div class="col-lg-9 col-12 mx-auto">
                                <div class="product-detail-image scroll-reveal-right">
                                    <div class="embla slider-view-1" id="productDetailCarousel">
                                        <div class="embla__viewport">
                                            <div class="embla__container product-cards-container">
                                                <div class="embla__slide">
                                                    <div class="product-card">
                                                        <div class="product-image">
                                                            <img src="./assets/images/service-1.webp" alt="Çatı Panelleri" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="embla__slide">
                                                    <div class="product-card">
                                                        <div class="product-image">
                                                            <img src="./assets/images/service-2.webp" alt="Çatı Panelleri" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-0 mx-auto align-self-center justify-content-center product-detail-slide-controls">
                                <div class="embla-controls">
                                    <button class="prev-btn-pd">
                                        <i class="icon-arrow-left-circle"></i>
                                    </button>
                                    <button class="next-btn-pd">
                                        <i class="icon-arrow-right-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="faq-section bg-white pt-5" id="faq-section">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-5">
                        <div class="faq-card">
                            <div class="decor-lines-top-1"></div>
                            <div class="decor-lines-top-2"></div>
                            <div class="decor-lines-top-3"></div>
                            <div class="accordion accordion-flush" id="faqAccordion">

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                                            Havalimanı Karşılama Hizmetiniz Nasıl İşliyor?
                                        </button>
                                    </h2>
                                    <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Güler yüzlü ekibimiz sizi havalimanı çıkış kapısında isminizin yazılı olduğu bir tabela ile karşılar ve valizlerinize yardımcı olarak aracınıza kadar eşlik eder.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                                            Şehir içinde bir kaç noktaya transfer hizmetiniz var mı?
                                        </button>
                                    </h2>
                                    <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Evet, Eliz VIP olarak Türkiye'nin her noktasına güvenli ve konforlu şehirler arası VIP transfer hizmeti sunuyoruz.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">
                                            Şehirler arası transfer hizmetiniz var mı?
                                        </button>
                                    </h2>
                                    <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Evet, Eliz VIP olarak Türkiye'nin her noktasına güvenli ve konforlu şehirler arası VIP transfer hizmeti sunuyoruz.
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="decor-lines-1"></div>
                            <div class="decor-lines-2"></div>
                            <div class="decor-lines-3"></div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="content-box ps-lg-4">
                            <span class="section-subtitle">SIKÇA SORULAN SORULAR</span>
                            <h2 class="section-title mb-4">Aklınızdaki Soruları <br> Yanıtlıyoruz</h2>
                            <div class="description">
                                <p>Eliz VIP Transfer ile konforlu, güvenli ve prestijli bir yolculuğa hazır olun. Havalimanı transferlerinden özel günlerinize kadar her anınızda yanınızdayız.</p>
                            </div>

                            <a href="#" class="btn btn-outline-dark rounded-pill px-4 py-2">Bize Ulaşın</a>

                            <div class="features-list mt-5">
                                <div class="feature-item">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                                            <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9z" />
                                            <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1zm1.038 3.018a6 6 0 0 1 .924 0 6 6 0 1 1-.924 0M0 3.5c0 .753.333 1.429.86 1.887A8.04 8.04 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5M13.5 1c-.753 0-1.429.333-1.887.86a8.04 8.04 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1" />
                                        </svg>
                                    </div>
                                    <div class="text">
                                        <h4>7/24 Kesintisiz Hizmet</h4>
                                        <p>Uçuş saatiniz ne olursa olsun, biz her zaman tam vaktinde oradayız.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16">
                                            <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6zm11.386 3.785-1.806-2.41-.776 2.413zm-3.633.004.961-2.989H4.186l.963 2.995zM5.47 5.495 8 13.366l2.532-7.876zm-1.371-.999-.78-2.422-1.818 2.425zM1.499 5.5l5.113 6.817-2.192-6.82zm7.889 6.817 5.123-6.83-2.928.002z" />
                                        </svg>
                                    </div>
                                    <div class="text">
                                        <h4>Lüks ve Konforlu Filo</h4>
                                        <p>En son model VIP araçlarımızla yolculuğunuzun tadını çıkarın.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider-line scroll-reveal-left">
                    <div class="divider-icon scroll-reveal-bottom">
                        <i class="icon-steering-wheel"></i>
                    </div>
                </div>
            </div>
        </section>

        <section class="wapper products-section py-5">
            <div class="container-fluid">

                <div class="row justify-content-center text-center mt-23mb-2 align-items-center">
                    <h2 class="section-title text-primary">ELİZ VIP TRANSFER</h2>
                    <h3 class="section-subtitle">Ankara'da VIP Transfer Hizmetlerimiz</h3>
                </div>

                <div class="row position-relative">
                    <div class="col-lg-11 col-11 mx-auto">
                        <div class="product-slider-wrapper">
                            <div class="embla" id="productCarousel">
                                <div class="embla__viewport">
                                    <div class="embla__container product-cards-container">
                                        <?php include 'include/urunler.php'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-lg-0 mx-auto align-self-center justify-content-center product-detail-slide-controls">
                        <div class="embla-controls">
                            <button class="prev-btn">
                                <i class="icon-arrow-left-circle"></i>
                            </button>
                            <button class="next-btn">
                                <i class="icon-arrow-right-circle"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>
</body>

</html>