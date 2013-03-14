<?php
/* @var $this ConsultaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consulta'=>array('index'),
	'Livros'
);

$this->menu=array(
	array('label'=>'Consultas', 'url'=>array('index')),
	array('label'=>'Consulta Movimentação', 'url'=>array('movimentacao')),
);
?>

<h1>Consulta de Livros</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'movimentacao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo', array('size'=>60)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Procurar'); ?>
	</div>

<?php $this->endWidget(); ?>

<?php if (isset($dataProvider)):?>

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_viewlivro',
	)); ?>
<?php endif;?>

</div><!-- form -->