<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>
<?php $form = ActiveForm::begin([
    'id' => 'order-form',
    'action' => ['order/send'],
    'options' => [
        'target' => '_blank',
    ]
]); ?>
<div class="modal fade" id="modalOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">¡Antes de Pedir!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?=$form->field($model, 'name')->textInput([
                    'maxlength' => true,
                    'placeholder' => 'Nombre Completo',
                ])->label(false)?>
                <?=$form->field($model, 'email')->textInput([
                    'maxlength' => true,
                    'placeholder' => 'Correo Electrónico',
                ])->label(false)?>
                <?=$form->field($model, 'phone')->textInput([
                    'maxlength' => true,
                    'placeholder' => 'Teléfono',
                ])->label(false)?>
                <?=$form->field($model, 'address')->textInput([
                    'maxlength' => true,
                    'placeholder' => 'Dirección',
                ])->label(false)?>
            </div>
            <div class="modal-footer">
                <?=Html::button('Cancelar', [
                    'class' => 'btn btn-outline-secondary',
                    'data' => [
                        'bs-dismiss' => 'modal',
                    ],
                ])?>
                <?=Html::submitButton('Comenzar', [
                    'id' => 'submit-button',
                    'class' => 'btn btn-primary',
                    'name' => 'submit-button',
                ])?>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>