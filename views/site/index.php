<?php
use Yii;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */

$this->title = 'Russ And Kaneesha';


?>
<div class="site-index">

    <?php
    $labelStyle = "col-lg-1 control-label";
    $divStyle = 'col-lg-3';
    $form = ActiveForm::begin([
        'id' => 'log-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => $labelStyle],
        ],
    ]); ?>


    <?= $form->field($guestForm, 'first_name') ?>

    <?= $form->field($guestForm, 'last_name') ?>
    <?= $form->field($guestForm, 'email')->input('email') ?>
    <?= $form->field($guestForm, 'phone') ?>
    <!-- <div class="form-group">
    <label class="<?php echo $labelStyle?>" for="phone">Phone #</label><div class="col-lg-3"><input class="form-control" id="phone" name="GuestLoginForm[phone]"></div>
    </div> -->
    <?php //$form->field($guestForm, 'phone') ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton(isset($guest) ? 'Save' : 'Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>