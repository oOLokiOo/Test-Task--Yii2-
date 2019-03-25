<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $editable kartik\editable\Editable */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use kartik\editable\Editable;
use yii\widgets\Pjax;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<main>
        <div class="row">
            <div class="col-sm-12">
                <div class="site-loginn">
                    <h1><?= Html::encode($this->title) ?></h1>

                    <p>Please fill out the following fields to login:</p>

                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'layout' => 'horizontal',
                        'fieldConfig' => [
                            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                            'labelOptions' => ['class' => 'col-lg-1 control-label'],
                        ],
                    ]); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        ]) ?>

                        <div class="form-group">
                            <div class="col-lg-offset-1 col-lg-11">
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>
                        </div>

                    <?php ActiveForm::end(); ?>

                    <div class="col-lg-offset-1" style="color:#999;">
                        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
                        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
                    </div>

                    <br />
                    <h3>Registred Users List:</h3>
                    <p><i><b>To add new random user, go to the root folder of project and type in console:</i></b> <code>yii adduser</code></p>
                    <div id="pjax-container">
                    <?= GridView::widget([
                            'dataProvider'  => $dataProvider,
                            'filterModel'   => [],
                            'columns'       => [
                                ['class' => 'yii\grid\SerialColumn'],
                                'id',
                                [
                                    'class'=>'kartik\grid\EditableColumn',
                                    'attribute'=>'username',
                                ],
                                [
                                    'class'=>'kartik\grid\EditableColumn',
                                    'attribute'=>'authKey',
                                ],
                                [
                                    'class'=>'kartik\grid\EditableColumn',
                                    'attribute'=>'accessToken',
                                ],
                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'template' => '{delete}',
                                    'buttons' => [
                                        'delete' => function ($url) {
                                            return Html::a(Yii::t('yii', '<span class="glyphicon glyphicon-trash"></span>'), '#', [
                                                'title' => Yii::t('yii', 'Delete'),
                                                'aria-label' => Yii::t('yii', 'Delete'),
                                                'onclick' => "
                                                    if (confirm('Are you shure, you want to delete User?')) {
                                                        $(this).closest('tr').fadeOut('slow');

                                                        $.ajax('', {
                                                            type: 'POST',
                                                            data: {
                                                                'hasDeleted': true,
                                                                'id': $(this).closest('tr').data('key')
                                                            }  
                                                        }).done(function(data) {
                                                            //$('#pjax-container table tr[data-key*=\"+data.id+\"]').fadeOut('slow');
                                                            //$.pjax.reload({container: '#pjax-container'});
                                                            alert(data.result);
                                                            return false;
                                                        });
                                                    }
                                                    return false;
                                                ",
                                            ]);
                                        },
                                    ],
                                ],
                            ],
                        ]);
                    ?>
                    </div>
                </div>
            </div>
        </div>
</main>