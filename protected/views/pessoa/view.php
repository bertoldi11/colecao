<?php
$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	$model->idPessoa,
);

$this->menu=array(
	array('label'=>'List Pessoa','url'=>array('index')),
	array('label'=>'Create Pessoa','url'=>array('create')),
	array('label'=>'Update Pessoa','url'=>array('update','id'=>$model->idPessoa)),
	array('label'=>'Delete Pessoa','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idPessoa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pessoa','url'=>array('admin')),
);
?>

<h1>View Pessoa #<?php echo $model->idPessoa; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idPessoa',
		'nome',
		'telefone',
		'celular',
		'email',
	),
)); ?>
