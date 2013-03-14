<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Gerenciar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>