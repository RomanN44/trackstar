<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Добро пожаловать <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php if(!Yii::app()->user->isGuest):?>
    <p>Вы вчера вошли в на <?php echo Yii::app()->user->lastLogin; ?>.
    </p>
<?php endif;?>
