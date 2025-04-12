<?php

use app\widgets\products\ProductItem;
?>
<section id="products" class="bg-terciary">
    <div class="container py-10">
        <div class="row">
            <div class="col-12">
                <div class="display-6 text-center mb-4"><i class="fi fi-tr-marketplace"></i></div>
                <h1 class="display-6 text-center">Nuestros Productos</h1>
                <p class="lead">Diseñamos empaques pensados para resaltar la belleza de lo que llevás dentro. Especializados en bolsas de terciopelo para joyería, cada uno de nuestros productos combina calidad, presentación y practicidad, adaptándose a las necesidades de tu marca.</p>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-6 col-md-2 mb-3">
                <?=ProductItem::widget([
                    'product' => [
                        'name' => 'Bolsa Tercipelo',
                        'price' => 150,
                        'image' => 'https://ik.imagekit.io/ready/corpalma/img/site/tr:w-400,h-400/hero-velvet-bag-1.png',
                        'link' => '#',
                    ],
                ])?>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <?=ProductItem::widget([
                    'product' => [
                        'name' => 'Bolsa Tercipelo',
                        'price' => 150,
                        'image' => 'https://ik.imagekit.io/ready/corpalma/img/site/tr:w-400,h-400/hero-velvet-bag-1.png',
                        'link' => '#',
                    ],
                ])?>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <?=ProductItem::widget([
                    'product' => [
                        'name' => 'Bolsa Tercipelo',
                        'price' => 150,
                        'image' => 'https://ik.imagekit.io/ready/corpalma/img/site/tr:w-400,h-400/hero-velvet-bag-1.png',
                        'link' => '#',
                    ],
                ])?>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <?=ProductItem::widget([
                    'product' => [
                        'name' => 'Bolsa Tercipelo',
                        'price' => 150,
                        'image' => 'https://ik.imagekit.io/ready/corpalma/img/site/tr:w-400,h-400/hero-velvet-bag-1.png',
                        'link' => '#',
                    ],
                ])?>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <?=ProductItem::widget([
                    'product' => [
                        'name' => 'Bolsa Tercipelo',
                        'price' => 150,
                        'image' => 'https://ik.imagekit.io/ready/corpalma/img/site/tr:w-400,h-400/hero-velvet-bag-1.png',
                        'link' => '#',
                    ],
                ])?>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <?=ProductItem::widget([
                    'product' => [
                        'name' => 'Bolsa Tercipelo',
                        'price' => 150,
                        'image' => 'https://ik.imagekit.io/ready/corpalma/img/site/tr:w-400,h-400/hero-velvet-bag-1.png',
                        'link' => '#',
                    ],
                ])?>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <!-- Rounded SVG Border-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</section>