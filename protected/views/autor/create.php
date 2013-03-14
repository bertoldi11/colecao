<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autores'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Autores', 'url'=>array('index')),
	array('label'=>'Gerenciar Autores', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Autor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>