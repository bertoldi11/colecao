<?php
/* @var $this MovimentacaoController */
/* @var $model Movimentacao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idMovimentacao'); ?>
		<?php echo $form->textField($model,'idMovimentacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idLivro'); ?>
		<?php echo $form->textField($model,'idLivro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPessoa'); ?>
		<?php echo $form->textField($model,'idPessoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dtEmprestimo'); ?>
		<?php echo $form->textField($model,'dtEmprestimo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dtDevolucao'); ?>
		<?php echo $form->textField($model,'dtDevolucao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'devolvido'); ?>
		<?php echo $form->textField($model,'devolvido',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->