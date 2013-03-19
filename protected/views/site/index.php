<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>CHtml::encode(Yii::app()->name),
)); ?>

<p>Sistema de Controle de Empréstimos de Livros</p>

<?php $this->endWidget(); ?>