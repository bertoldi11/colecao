<?php
/* @var $this EditoraController */
/* @var $model Editora */

$this->breadcrumbs=array(
	'Editoras'=>array('index'),
	$model->idEditora,
);

$this->menu=array(
	array('label'=>'Listar Editora', 'url'=>array('index')),
	array('label'=>'Cadastrar Editora', 'url'=>array('create')),
	array('label'=>'Alterar Editora', 'url'=>array('update', 'id'=>$model->idEditora)),
	array('label'=>'Apagar Editora', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEditora),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar Editora', 'url'=>array('admin')),
);
?>

<h1>View Editora #<?php echo $model->idEditora; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEditora',
		'cnpj',
		'razaoSocial',
		'nomeFantasia',
		'telefone',
		'fax',
		'email',
		'site',
	),
)); ?>
