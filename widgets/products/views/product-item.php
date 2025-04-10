<?php
use yii\helpers\Html;

$formatter = Yii::$app->formatter;
?>
<div class="card h-100">
    <img src="<?=$product['image']?>" class="card-img-top" alt="<?=$product['name']?>">
    <div class="card-body p-1 py-3 text-center">
        <div class="card-title mb-1 fs-4"><?=$product['name']?></div>
        <?php if(isset($product['description'])) : ?>
            <div class="card-text mb-2"><?=$product['description']?></div>
        <?php endif; ?>
        <div class="card-text text-secondary fs-4"><strong><?=$formatter->asCurrency($product['price'])?></strong></div>
    </div>
    <div class="card-footer p-2">
        <div class="d-grid">
            <?=Html::button('Pedir Ahora', [
                'class' => 'btn btn-yellow text-dark fw-bold text-uppercase',
                'data' => [
                    'bs-toggle' => 'modal',
                    'bs-target' => '#modalOrder',
                ],
            ])?>
        </div>
    </div>
</div>