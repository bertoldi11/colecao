<?php
/* @var $this MovimentacaoController */
/* @var $model Movimentacao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'movimentacao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idLivro'); ?>
		<?php echo $form->dropDownList($model,'idLivro', CHtml::listData(Livro::model()->findAll(), 'idLivro', 'titulo'), array('empty'=>'Selecione')); ?>
		<?php echo $form->error($model,'idLivro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idPessoa'); ?>
		<?php echo $form->dropDownList($model,'idPessoa', CHtml::listData(Pessoa::model()->findAll(), 'idPessoa', 'nome'), array('empty'=>'Selecione')); ?>
		<?php echo $form->error($model,'idPessoa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Emprestar' : 'Devolver'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->