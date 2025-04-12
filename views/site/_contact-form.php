<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
?>
<div>
    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

    <?= $form->field($model, 'name')->textInput([
        'placeholder' => 'Nombre',
    ])->label(false) ?>

    <?= $form->field($model, 'email')->textInput([
        'placeholder' => 'Email',
    ])->label(false) ?>

    <?= $form->field($model, 'subject')->textInput([
        'placeholder' => 'Asunto',
    ])->label(false) ?>

    <?= $form->field($model, 'body')->textarea([
        'placeholder' => 'Mensaje',
        'rows' => 6,
    ])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar', [
            'class' => 'btn btn-primary'
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>