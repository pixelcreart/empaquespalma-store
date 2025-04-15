<?php

use yii\helpers\Html;

?>
<nav class="navbar navbar-marketing navbar-expand-lg bg-primary navbar-dark">
    <div class="container px-5">
        <a class="navbar-brand text-white" href="index.html">
            <?=Html::img('https://ik.imagekit.io/ready/corpalma/img/site/logo-mini-light.png', [
                'class' => 'navbar-brand-img',
                'alt' => 'Empaques Palma',
            ])?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-lg-5">
                <li class="nav-item">
                    <?=Html::a('Home', ['/'], ['class' => 'nav-link'])?>
                </li>
                <li class="nav-item">
                    <?=Html::a('Productos', '#products', [
                        'class' => 'nav-link',
                    ])?>
                </li>
                <li class="nav-item">
                    <?=Html::a('Nosotros', '#about', [
                        'class' => 'nav-link',
                    ])?>
                </li>
                <li class="nav-item">
                    <?=Html::a('Contacto', '#contact', [
                        'class' => 'nav-link',
                    ])?>
                </li>
            </ul>
            <?=Html::button('Escribenos', [
                'class' => 'btn btn-secondary fw-500 ms-lg-4',
                'data' => [
                    'bs-toggle' => 'modal',
                    'bs-target' => '#modal-whatsapp',
                ],
            ])?>
        </div>
    </div>
</nav>