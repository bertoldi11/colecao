<div>
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'pessoa-form',
		'enableAjaxValidation'=>false,
		'action'=>$model->isNewRecord ? Yii::app()->createUrl('pessoa/create') : Yii::app()->createUrl('pessoa/update', array('id'=>$model->idPessoa)) 
	)); ?>
	
		<p class="help-block">Campos  com <span class="required">*</span> são obrigatórios.</p>
	
		<?php echo $form->errorSummary($model); ?>
	
		<?php echo $form->textFieldRow($model,'nome',array('class'=>'span5','maxlength'=>60)); ?>
		
		
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php $this->widget('CMaskedTextField', array(
				'model' => $model,
				'attribute' => 'telefone',
				'mask' => '(99) 9999-9999',
				'htmlOptions' => array('size' => 15, 'class'=>'span5')
		)); ?>
	
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php $this->widget('CMaskedTextField', array(
				'model' => $model,
				'attribute' => 'celular',
				'mask' => '(99) 9999-9999',
				'htmlOptions' => array('size' => 15, 'class'=>'span5')
		)); ?>
	
		<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>100, 'prepend'=>'@')); ?>
	
		<div class="form-actions">
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				'type'=>'primary',
				'label'=>$model->isNewRecord ? 'Cadastrar' : 'Alterar',
			)); ?>
		</div>
	
	<?php $this->endWidget(); ?>
</div>
