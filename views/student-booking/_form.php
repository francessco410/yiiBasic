<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $model app\models\StudentBooking */
/* @var $form yii\widgets\ActiveForm */
?>

<img id="logo" src="web/uploads/web_img/logo.jpg" alt=""/>
<div class="student-booking-form">
    <h1 id="title">room reservation form</h1>
    <h2 id="subtitle">Please fill in the form below to book room with us, before that read carefuly 
        <a href="http://www.erasmus.embraganca.info/procedureEN.php">this article</a>
        . Be advised, reservation is confirmed ONLY after we reply your reservation request.
    </h2>
    <?php $form = ActiveForm::begin([
        'options' => ['encytype' => 'multipart/form-data']
    ]); ?>
    
    <?= $form->field($model_person, 'name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model_person, 'surname')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model_person, 'email')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model_person, 'sex')->radioList([
                                                'M' => 'Male', 
                                                'F' => 'Female'
                                            ]); 
    ?>
    
    
    
    <?= $form->field($model_person, 'country')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home_university')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arrival_date')->widget(DatePicker::classname(), 
                                [
                                    'options' => ['placeholder' => 'Enter arrival date ...'],
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => 'day/month/year',
                                    'pluginOptions' => [
                                    'autoclose'=>true
                                ]
        ]); ?>

    <?= $form->field($model, 'months')->textInput() ?>

    <?= $form->field($model, 'room_type')->radioList([
                                                1 => 'Single room', 
                                                2 => 'Double room'
                                            ]); 
    ?>

    <?= $form->field($model, 'kit')->radioList([
                                                1 => 'Yes', 
                                                0 => 'No'
                                            ]); 
    ?>
    
    <?= $form->field($model_person, 'smoker')->radioList([
                                                1 => 'Yes', 
                                                0 => 'No'
                                            ]); 
    ?>   
    
    <?= $form->field($model_person, 'file')->fileInput() ?>
     

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'reCaptcha')->widget(
    \himiklab\yii2\recaptcha\ReCaptcha::className(),
    ['siteKey' => '6Lf2cywUAAAAAHVilgdeRjs8Hs73NjhSXU2cgZXu']
    ) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
