<?php

use yii\helpers\Html;
?>
<section id="contact" class="bg-white">
    <div class="container py-10">
        <div class="row mb-4" data-aos="fade-up">
            <div class="col-12">
                <div class="display-6 text-center mb-4"><i class="fi fi-tr-comments"></i></div>
                <h1 class="display-6 text-center">Contáctanos</h1>
                <p class="lead text-center">Ya sea para hacer un pedido, una cotización al por mayor o resolver cualquier duda sobre nuestros productos, estamos listos para ayudarte. ¡Escribinos y te respondemos lo más pronto posible!</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6 pe-md-5" data-aos="fade-right">
                <h5 class="mb-4">Escríbenos</h5>
                <div class="mb-4">
                    <?=$this->render('_contact-form' ,[
                        'model' => $model,
                    ])?>
                </div>
            </div>
            <div class="col-md-6 ps-md-5" data-aos="fade-left">
                <h5 class="mb-4">Contáctenos</h5>
                <div>
                    <div class="mb-1">
                        <span class="fs-5 fw-bold">Empaques Palma</span>
                    </div>
                    <div class="mb-1"><i class="fi fi-tr-marker"></i> San Pedro Sula, Honduras</div>
                    <div class="mb-1"><i class="fi fi-tr-at"></i> <?=Html::a('info@empaquespalma.com', 'mailto:info@empaquespalma.com')?></div>
                    <div class="mb-1"><i class="fi fi-brands-whatsapp"></i> <?=Html::a('+504 3190-6463', '#')?></div>
                    <div class="mb-1"><i class="fi fi-brands-instagram"></i> <?=Html::a('@empaquespalma', 'https://instagram.com/empaquespalma', [
                        'target' => '_blank',
                        'rel' => 'noopener noreferrer',
                    ])?></div>
                    <div class="mb-1"><i class="fi fi-brands-facebook"></i> <?=Html::a('Empaques Palma', 'https://facebook.com/empaquespalma', [
                        'target' => '_blank',
                        'rel' => 'noopener noreferrer',
                    ])?></div>
                    <div class="mb-1"><i class="fi fi-brands-tik-tok"></i> <?=Html::a('@Empaques Palma', 'https://www.tiktok.com/@empaquespalma', [
                        'target' => '_blank',
                        'rel' => 'noopener noreferrer',
                    ])?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-light">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>