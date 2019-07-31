<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<H1>BMI CALCULATE</H1>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'height') ?>
<?= $form->field($model, 'weight') ?>
<?= Html::submitButton('คำนวณ', ['class' => 'btn btn-info']) ?>
<?php ActiveForm::end(); ?>
<?= 'ค่า BMI ของคุณคือ ' . $bmi ?>