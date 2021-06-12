<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;
?>

<?php if ($name) { ?><p>Вы ввели имя <b><?= $name ?></b> и email <b><?= $email ?></b><?php } ?>

    <?php $f = ActiveForm::begin(); ?>

    <?= $f->field($form, 'name') ?>
    <?= $f->field($form, 'email') ?>
    <?= Html::submitButton('Отправить') ?>

    <?php ActiveForm::end(); ?>