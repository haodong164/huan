<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        RedisUpdate
    </title>
</head>
<body>

<?php $form = ActiveForm::begin([
    'method' => 'post',
    'action' => \yii\helpers\Url::to(['index/do_add']),
    'options' => [
        'enctype' => 'multipart/form-data',
        'class' => 'form-horizontal'
    ],
    'fieldConfig' => [  // 为每一个input 设置
        'template' => "{label}\n<div class=\"col-lg-5\">{input}</div>\n<div class=\"col-lg-5\">{error}</div>",
        // <label></label> \n <div class="..."> <input ...> </div>\n<div class=\"col-lg-5\">这个是yii默认的错误提示</div>
        'labelOptions' => ['class' => 'col-lg-2 control-label'],    // 设置label 的属性 添加class
    ],
]); ?>
<!--    表单开始-->
    <?= $form->field($model, 'username')->textInput([
        'maxlength' => '15',
        'minlength' => '2',
        'placeholder' => '学生姓名',
    ])->label('姓名') ?>

    <?= $form->field($model, 'sex')->radioList([
        '女' => '女',
        '男' => '男',

        //'prompt' => $info[5]

    ]) ?>


    <?= $form->field($model, 'idcate')->textInput()->label('身份证号') ?>

    <?= $form->field($model, 'dorm_id')->textInput()->label('宿舍') ?>

<div style="float:left; margin-left:20%; width:20%;">

    <?= Html::submitButton('更新',['class' => 'btn btn-primary']) ?>
</div>
<div>
    <?= Html::resetButton('重置', ['class' => 'btn btn-info']) ?>
</div>

<?php ActiveForm::end() ?>


</body>
</html>


