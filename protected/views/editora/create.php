<?php
/* @var $this EditoraController */
/* @var $model Editora */

$this->breadcrumbs=array(
	'Editoras'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Editora', 'url'=>array('index')),
	array('label'=>'Gerenciar Editora', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Editora</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>