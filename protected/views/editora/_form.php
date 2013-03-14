<?php
/* @var $this EditoraController */
/* @var $model Editora */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'editora-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cnpj'); ?>
		<?php echo $form->textField($model,'cnpj',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'cnpj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razaoSocial'); ?>
		<?php echo $form->textField($model,'razaoSocial',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'razaoSocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomeFantasia'); ?>
		<?php echo $form->textField($model,'nomeFantasia',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'nomeFantasia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site'); ?>
		<?php echo $form->textField($model,'site',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'site'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Alterar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->