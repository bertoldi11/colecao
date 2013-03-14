<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->idUsuario=>array('view','id'=>$model->idUsuario),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Cadastrar Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->idUsuario)),
	array('label'=>'Gerenciar  Usuario', 'url'=>array('admin')),
);
?>

<h1>Update Usuario <?php echo $model->idUsuario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>