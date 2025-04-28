<?php

use yii\helpers\Html;
?>
<header class="page-header-ui page-header-ui-dark bg-img-cover overlay overlay-75" style="background-image: url('https://ik.imagekit.io/ready/corpalma/img/site/jumbotron.png');">
    <div class="page-header-ui-content position-relative z-index-2">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-up">
                    <h1 class="page-header-ui-title d-none d-sm-block">Empaques que realzan tu marca</h1>
                    <p class="fs-4 fw-lighter text-white mb-5 d-none d-sm-block">Bolsas de terciopelo premium para joyerías y regalos especiales</p>
                    <div class="d-none d-sm-block">
                        <?=Html::a('Nuestro Catalogo', '#products', [
                            'class' => 'btn btn-secondary fw-500 me-2',
                        ])?>
                        <?=Html::a('Contactenos', '#contact', [
                            'class' => 'btn btn-link fw-500',
                        ])?>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <?=Html::img('https://ik.imagekit.io/ready/corpalma/img/site/hero-1.png', [
                        'class' => 'img-fluid',
                        'alt' => 'Empaques Palma',
                    ])?>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>