<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'idPessoa',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nome',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'telefone',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'celular',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
