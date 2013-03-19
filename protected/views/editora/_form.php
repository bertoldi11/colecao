<?php
/* @var $this EditoraController */
/* @var $model Editora */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
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
		<?php echo $form->textField($model,'razaoSocial',array('size'=>80,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'razaoSocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomeFantasia'); ?>
		<?php echo $form->textField($model,'nomeFantasia',array('size'=>80,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'nomeFantasia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php $this->widget('CMaskedTextField', array(
				'model' => $model,
				'attribute' => 'telefone',
				'mask' => '(99) 9999-9999',
				'htmlOptions' => array('size' => 15)
		)); ?>
		<?php echo $form->error($model,'nomeFantasia'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php $this->widget('CMaskedTextField', array(
				'model' => $model,
				'attribute' => 'fax',
				'mask' => '(99) 9999-9999',
				'htmlOptions' => array('size' => 15)
		)); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($model, 'site', array('prepend'=>'www.','size'=>50,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'site'); ?>
	</div>
	<br>
	<div class="row buttons">
		<button id="yw0" class="btn btn-small">
			<i class=" icon-arrow-right"></i>
			<?php echo $model->isNewRecord ? 'Salvar' : 'Alterar';?>
		</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->