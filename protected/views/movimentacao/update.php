<?php
/* @var $this MovimentacaoController */
/* @var $model Movimentacao */

$this->breadcrumbs=array(
	'Movimentacaos'=>array('index'),
	$model->idMovimentacao=>array('view','id'=>$model->idMovimentacao),
	'Update',
);

$this->menu=array(
	array('label'=>'List Movimentacao', 'url'=>array('index')),
	array('label'=>'Create Movimentacao', 'url'=>array('create')),
	array('label'=>'View Movimentacao', 'url'=>array('view', 'id'=>$model->idMovimentacao)),
	array('label'=>'Manage Movimentacao', 'url'=>array('admin')),
);
?>

<h1>Update Movimentacao <?php echo $model->idMovimentacao; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>