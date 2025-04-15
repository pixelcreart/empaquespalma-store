<?php
use yii\helpers\Html;

$formatter = Yii::$app->formatter;

if(!isset($product['action'])) {
    $product['action'] = [
        'type' => 'button',
        'label' => 'Pedir ahora',
    ];
}

if(!isset($product['action']['options'])) {
    $product['action']['options'] = [
        'class' => 'btn btn-secondary text-uppercase'
    ];
}

if(!isset($product['action']['options']['class'])) {
    $product['action']['options']['class'] = 'btn btn-secondary text-uppercase';
}
?>
<div class="product-card card h-100">
    <?php if(!empty($product['special'])) : ?>
        <div class="special-badge badge text-bg-primary rounded-sm position-absolute text-uppercase"><?=$product['special']?></div>
    <?php endif; ?>
    <img src="<?=$product['image']?>" class="card-img-top" alt="<?=$product['name']?>">
    <div class="card-body px-4 py-3">
        <div class="card-title mb-1"><?=$product['name']?></div>
        <?php if(isset($product['description'])) : ?>
            <div class="card-text mb-2 small">
                <?=$product['description']?>
            </div>
        <?php endif; ?>
        <?php if(isset($product['sizes'])) : ?>
            <div class="card-text mb-2">
                <?php foreach($product['sizes'] as $size) : ?>
                    <span class="badge text-bg-light"><?=$size?> <?=$product['size_unit']?></span>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if(isset($product['colors'])) : ?>
            <div class="card-text d-flex gap-2">
                <?php foreach($product['colors'] as $color) : ?>
                    <span class="color-circle" style="background-color: <?=$color?>;"></span>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if(isset($product['price'])) : ?>
            <div class="card-text text-secondary fs-4">
                <strong><?=$formatter->asCurrency($product['price'])?></strong>
            </div>
        <?php endif; ?>
    </div>
    <div class="card-footer p-2">
        <div class="d-grid">
            <?php if($product['action']['type']==='button') : ?>
                <?=Html::button($product['action']['label'], $product['action']['options'])?>
            <?php else : ?>
                <?=Html::a($product['action']['label'], $product['action']['url'], $product['action']['options'])?>
            <?php endif; ?>
        </div>
    </div>
</div>