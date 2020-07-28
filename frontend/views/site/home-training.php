<body class="is-boxed has-animations" style="background-color: #1856b2;">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <img class="header-logo-image asset-light" src="<?= Yii::getAlias('@web/template') ?>/dist/images/logo-light.svg" alt="Logo">
                                <img class="header-logo-image asset-dark" src="<?= Yii::getAlias('@web/template') ?>/dist/images/logo-dark.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                            <h1 class="hero-title mt-0">PERBANKAN INDONESIA</h1>
                            <p class="hero-paragraph">Aplikasi Pendaftaran Lamaran Kerja</p>
                            <div class="hero-cta">
                                <?php
                                if (Yii::$app->user->isGuest) { ?>
                                    <!-- <a class="button button-primary" href="login">LOGIN</a> -->
                                    <!-- <a class="button button-danger" href="signup">DAFTAR</a> -->
                                    <a class="button button-primary" href="login">LOGIN</a>
                                    <a class="button button-danger" href="signup">DAFTAR</a>
                                <?php } else { ?>
                                    <a class="button button-danger" href="<?=  Yii::$app->request->referrer ?>">BACK</a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="hero-media">
                            <div class="header-illustration">
                                <img class="header-illustration-image asset-light" src="<?= Yii::getAlias('@web/template') ?>/dist/images/header-illustration-light.svg" alt="Header illustration">
                                <img class="header-illustration-image asset-dark" src="<?= Yii::getAlias('@web/template') ?>/dist/images/header-illustration-dark.svg" alt="Header illustration">
                            </div>
                            <div class="hero-media-illustration">
                                <img class="hero-media-illustration-image asset-light" src="<?= Yii::getAlias('@web/template') ?>/dist/images/hero-media-illustration-light.svg" alt="Hero media illustration">
                                <img class="hero-media-illustration-image asset-dark" src="<?= Yii::getAlias('@web/template') ?>/dist/images/hero-media-illustration-dark.svg" alt="Hero media illustration">
                            </div>
                            <div class="hero-media-container">
                                <img class="hero-media-image asset-light" src="<?= Yii::getAlias('@web/template') ?>/src/images/user.png" alt="Hero media" width="300">
                                <img class="hero-media-image asset-dark" src="<?= Yii::getAlias('@web/template') ?>/dist/images/hero-media-dark.svg" alt="Hero media">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="features section">
                <div class="container">
                    <div class="features-inner section-inner has-bottom-divider">
                        <div class="features-header text-center">
                            <div class="container-sm">
                                <h2 class="section-title mt-0">The Product</h2>
                                <p class="section-paragraph">Lorem ipsum is common placeholder text used to demonstrate the graphic elements of a document or visual presentation.</p>
                                <div class="features-image">
                                    <img class="features-illustration asset-dark" src="<?= Yii::getAlias('@web/template') ?>/dist/images/features-illustration-dark.svg" alt="Feature illustration">
                                    <img class="features-box asset-dark" src="<?= Yii::getAlias('@web/template') ?>/dist/images/features-box-dark.svg" alt="Feature box">
                                    <img class="features-illustration asset-dark" src="<?= Yii::getAlias('@web/template') ?>/dist/images/features-illustration-top-dark.svg" alt="Feature illustration top">
                                    <img class="features-illustration asset-light" src="<?= Yii::getAlias('@web/template') ?>/dist/images/features-illustration-light.svg" alt="Feature illustration">
                                    <img class="features-box asset-light" src="<?= Yii::getAlias('@web/template') ?>/dist/images/features-box-light.svg" alt="Feature box">
                                    <img class="features-illustration asset-light" src="<?= Yii::getAlias('@web/template') ?>/src/images/user.png" alt="Feature illustration top" width="300">
                                </div>
                            </div>
                        </div>
                        <div class="features-wrap">
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img class="asset-light" src="<?= Yii::getAlias('@web/template') ?>/dist/images/feature-01-light.svg" alt="Feature 01">
                                        <img class="asset-dark" src="<?= Yii::getAlias('@web/template') ?>/dist/images/feature-01-dark.svg" alt="Feature 01">
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="feature-title mt-0">Discover</h3>
                                        <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua dui.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img class="asset-light" src="<?= Yii::getAlias('@web/template') ?>/dist/images/feature-02-light.svg" alt="Feature 02">
                                        <img class="asset-dark" src="<?= Yii::getAlias('@web/template') ?>/dist/images/feature-02-dark.svg" alt="Feature 02">
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="feature-title mt-0">Discover</h3>
                                        <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua dui.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img class="asset-light" src="<?= Yii::getAlias('@web/template') ?>/dist/images/feature-03-light.svg" alt="Feature 03">
                                        <img class="asset-dark" src="<?= Yii::getAlias('@web/template') ?>/dist/images/feature-03-dark.svg" alt="Feature 03">
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="feature-title mt-0">Discover</h3>
                                        <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua dui.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="cta section">
                <div class="container-sm">
                    <div class="cta-inner section-inner">
                        <div class="cta-header text-center">
                            <h2 class="section-title mt-0"></h2>
                            <p class="section-paragraph"></p>
                            <div class="cta-cta">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer has-top-divider">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
                        <a href="#">
                        </a>
                    </div>
                    <div class="footer-copyright">&copy; 2020 PERBANKAN INDONESIA, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?= Yii::getAlias('@web/template') ?>/dist/js/main.min.js"></script>
</body>
