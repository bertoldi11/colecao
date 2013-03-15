<?php
/* @var $this ConsultaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consulta'=>array('index'),
	'Movimentação'
);

$this->menu=array(
	array('label'=>'Consultas', 'url'=>array('index')),
	array('label'=>'Consulta Livro', 'url'=>array('livro')),
);
?>

<h1>Consulta de Movimentações</h1>

<div class="form">	
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'movimentacao-form',
		'enableAjaxValidation'=>false,
	)); ?>
	
		<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>
	
		<?php echo $form->errorSummary($model); ?>
	
		<div class="row">
			<?php echo $form->labelEx($model,'dtIni'); ?>
			<?php echo $form->dateField($model,'dtIni', array('size'=>11, 'maxlength'=>10)); ?>
			<?php echo $form->error($model,'dtIni'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'dtFim'); ?>
			<?php echo $form->dateField($model,'dtFim', array('size'=>11, 'maxlength'=>10)); ?>
			<?php echo $form->error($model,'dtFim'); ?>
			<p class="note">Em branco para data atual</p>
		</div>
		
		<div class="row buttons">
			<?php echo CHtml::submitButton('Procurar'); ?>
		</div>
	
	<?php if (isset($dataProvider)):?>	
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_viewMovimentacao',
		)); ?>
	<?php endif;?>
	
	<?php $this->endWidget(); ?>
</div><!-- form -->