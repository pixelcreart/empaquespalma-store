<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\widgets\MaskedInput;

?>
<?php $form = ActiveForm::begin([
    'id' => 'whatsapp-form',
    'action' => ['contact/message'],
    'options' => [
        'target' => '_blank',
    ]
]); ?>
<div class="modal fade" id="modal-whatsapp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="my-5 text-center">
                    <?=Html::img('https://ik.imagekit.io/ready/corpalma/img/site/tr:w-90/logo-sm-ep.png')?>
                </div>
                <?=$form->field($model, 'name')->textInput([
                    'maxlength' => true,
                    'placeholder' => 'Nombre Completo',
                ])->label(false)?>
                <?=$form->field($model, 'email')->textInput([
                    'type' => 'email',
                    'maxlength' => true,
                    'placeholder' => 'Correo Electrónico',
                ])->label(false)?>
                <?=$form->field($model, 'phone')->widget(MaskedInput::class, [
                    'mask' => '9999-9999',
                    'options' => [
                        'placeholder' => 'Telefono',
                    ],
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