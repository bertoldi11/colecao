<?php
/* @var $this MovimentacaoController */
/* @var $model Movimentacao */

$this->breadcrumbs=array(
	'Movimentacaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Movimentacao', 'url'=>array('index')),
	array('label'=>'Gerenciar Movimentacao', 'url'=>array('admin')),
);
?>

<h1>Movimentação</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>