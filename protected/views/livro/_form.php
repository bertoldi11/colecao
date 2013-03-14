<?php
/* @var $this LivroController */
/* @var $model Livro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'livro-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigratórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitulo'); ?>
		<?php echo $form->textField($model,'subtitulo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'subtitulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paginas'); ?>
		<?php echo $form->textField($model,'paginas'); ?>
		<?php echo $form->error($model,'paginas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idEditora'); ?>
		<?php echo $form->dropDownList($model,'idEditora', CHtml::listData(Editora::model()->findAll(), 'idEditora', 'razaoSocial')); ?>
		<?php echo $form->error($model,'idEditora'); ?>
	</div>
	
	<?php $modelAutor = AutorLivro::model()?>
	<div class="row">
		<?php echo $form->labelEx($modelAutor,'idAutor'); ?>
		<?php echo $form->dropDownList($modelAutor,'idAutor', CHtml::listData(Autor::model()->findAll(), 'idAutor', 'nome'), array('multiple'=>true)); ?>
		<?php echo $form->error($modelAutor,'idAutor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->