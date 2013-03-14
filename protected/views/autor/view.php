<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autores'=>array('index'),
	$model->idAutor,
);

$this->menu=array(
	array('label'=>'Listar Autores', 'url'=>array('index')),
	array('label'=>'Cadastrar Autor', 'url'=>array('create')),
	array('label'=>'Alterar Autor', 'url'=>array('update', 'id'=>$model->idAutor)),
	array('label'=>'Deletar Autor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAutor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar Autor', 'url'=>array('admin')),
);
?>

<h1>Vendo dados do Autor #<?php echo $model->idAutor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAutor',
		'nome',
		'email',
		'site',
	),
)); ?>
