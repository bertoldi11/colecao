<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autores'=>array('index'),
	$model->idAutor=>array('view','id'=>$model->idAutor),
	'Alterar',
);

$this->menu=array(
	array('label'=>'Listar Autores', 'url'=>array('index')),
	array('label'=>'Cadastrar Autor', 'url'=>array('create')),
	array('label'=>'Ver Autores', 'url'=>array('view', 'id'=>$model->idAutor)),
	array('label'=>'Gerenciar Autores', 'url'=>array('admin')),
);
?>

<h1>Alterar dados do Autor <?php echo $model->idAutor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>