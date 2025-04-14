<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use app\widgets\Turnstile;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
?>
<div>
    <?php $form = ActiveForm::begin([
        'action' => ['site/contact'],
        'method' => 'post',
    ]); ?>

    <?= $form->field($model, 'name')->textInput([
        'placeholder' => 'Nombre',
    ])->label(false) ?>

    <?= $form->field($model, 'email')->textInput([
        'type' => 'email',
        'placeholder' => 'Email',
    ])->label(false) ?>

    <?= $form->field($model, 'body')->textarea([
        'placeholder' => 'Mensaje',
        'rows' => 6,
    ])->label(false) ?>

    <div class="mb-2">
        <?=Turnstile::widget([
            'size' => 'flexible',
        ])?>
    </div>

    <div class="form-group">
        <div class="d-grid gap-2">
            <?= Html::submitButton('Enviar', [
                'class' => 'btn btn-primary btn-lg'
            ]) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>