<?php
/* @var $this EditoraController */
/* @var $model Editora */

$this->breadcrumbs=array(
	'Editoras'=>array('index'),
	$model->idEditora=>array('view','id'=>$model->idEditora),
	'Alterar',
);

$this->menu=array(
	array('label'=>'Listar Editora', 'url'=>array('index')),
	array('label'=>'Cadastrar Editora', 'url'=>array('create')),
	array('label'=>'Ver Editora', 'url'=>array('view', 'id'=>$model->idEditora)),
	array('label'=>'Gerenciar Editora', 'url'=>array('admin')),
);
?>

<h1>Update Editora <?php echo $model->idEditora; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>