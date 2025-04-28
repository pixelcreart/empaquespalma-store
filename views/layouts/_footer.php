<?php

use yii\helpers\Html;
?>
<div id="layoutDefault_footer">
    <footer class="footer pt-10 pb-5 mt-auto bg-light footer-light">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-3">
                    <div class="footer-brand">
                        <?=Html::img('https://ik.imagekit.io/ready/corpalma/img/site/tr:e-grayscale/logo.png', [
                            'class' => 'img-fluid mb-4',
                            'alt' => 'Empaques Palma',
                        ])?>
                    </div>
                </div>
            </div>
            <hr class="my-5" />
            <div class="row gx-5 align-items-center">
                <div class="col-md-6 small">&copy; <?=Yii::$app->name?> <?=date('Y')?></div>
                <div class="col-md-6 text-md-end small">
                    <a href="#!">Privacy Policy</a>
                    &middot;
                    <a href="#!">Terms &amp; Conditions</a>
                </div>
            </div>
            <div class="row gx-5 my-3">
                <div class="col-12 text-center">
                    
                </div>
            </div>
        </div>
    </footer>
</div>