<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dtCriacao'); ?>
		<?php echo $form->textField($model,'dtCriacao'); ?>
		<?php echo $form->error($model,'dtCriacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dtAlteracao'); ?>
		<?php echo $form->textField($model,'dtAlteracao'); ?>
		<?php echo $form->error($model,'dtAlteracao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dtUltLogin'); ?>
		<?php echo $form->textField($model,'dtUltLogin'); ?>
		<?php echo $form->error($model,'dtUltLogin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->