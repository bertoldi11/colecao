<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Bem vindo ao '.CHtml::encode(Yii::app()->name),
)); ?>


<?php $this->endWidget(); ?>