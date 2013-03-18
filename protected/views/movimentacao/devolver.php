<?php
/* @var $this ConsultaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movimentacao'=>array('index'),
	$model->idMovimentacao=>array('view','id'=>$model->idMovimentacao),
	'devolver'
);

?>

<h1>Devolução de Livro</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idMovimentacao',
		'idLivro0.titulo',
		'idPessoa0.nome',
		array(
            'label'=>'Empréstimo',
            'type'=>'raw',
            'value'=> $this->inverteData($model->dtEmprestimo),
        ),
	),
)); ?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'devolver-form',
		'enableAjaxValidation'=>false,
	)); ?>
	
		<?php echo $form->errorSummary($model); ?>
	
		<div class="row">
			<?php echo $form->labelEx($model,'observacao'); ?>
			<?php echo $form->textArea($model,'observacao', array('cols'=>'85')); ?>
			<?php echo $form->error($model,'observacao'); ?>
		</div>
	
		<div class="row buttons">
			<?php echo CHtml::submitButton('Devolver'); ?>
		</div>
	
	<?php $this->endWidget(); ?>

</div><!-- form -->