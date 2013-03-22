<?php
/* @var $this MovimentacaoController */
/* @var $model Movimentacao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'movimentacao-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>
	
	
	<?php 
		echo $form->labelEx($model,'idLivro'); 
		$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
			'name'=>'Livro',
		    'sourceUrl' =>Yii::app()->createUrl('livro/autoComplete'),
		    // additional javascript options for the autocomplete plugin
		    'options'=>array(
		        'minLength'=>'2',
		        'select'=> 'js: function(event,ui) {jQuery("#idLivro").val(ui.item.id);}',
		    ),
		    'htmlOptions'=>array(
		        'style'=>'height:20px;',
		        'class'=>'span5'
		    ),
		));
		
		echo $form->labelEx($model,'idPessoa'); 
		$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
			'name'=>'Pessoa',
		    'sourceUrl' =>Yii::app()->createUrl('pessoa/autoComplete'),
		    // additional javascript options for the autocomplete plugin
		    'options'=>array(
		        'minLength'=>'2',
		        'select'=> 'js: function(event,ui) {jQuery("#idPessoa").val(ui.item.id);}',
		    ),
		    'htmlOptions'=>array(
		        'style'=>'height:20px;',
		        'class'=>'span5'
		    ),
		));
	
		echo "<br />";
	?>
	
	<button id="yw0" class="btn btn-small">
		<i class=" icon-arrow-right"></i>
		Emprestar
	</button>
	
	<input type="hidden" name="Movimentacao[idLivro]" id="idLivro" /><input type="hidden" name="Movimentacao[idPessoa]" id="idPessoa"/>
<?php $this->endWidget(); ?>

</div><!-- form -->