<?php
use Yii;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */

$this->title = 'Russ And Kaneesha';

$user = Yii::$app->User;
$app = Yii::$app;


?>
<div class="site-index">

        <?php if(!isset($guest)):?>
            <?php $form = ActiveForm::begin([
                'id' => 'log-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

            <?= $form->field($guestForm, 'first_name') ?>

            <?= $form->field($guestForm, 'last_name') ?>

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        <?php endif;?>

</div>