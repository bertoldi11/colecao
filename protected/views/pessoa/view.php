<?php
/* @var $this PessoaController */
/* @var $model Pessoa */

$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	$model->idPessoa,
);

$this->menu=array(
	array('label'=>'Listar Pessoa', 'url'=>array('index')),
	array('label'=>'Cadastrar Pessoa', 'url'=>array('create')),
	array('label'=>'Alterar Pessoa', 'url'=>array('update', 'id'=>$model->idPessoa)),
	array('label'=>'Apagar Pessoa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPessoa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar Pessoa', 'url'=>array('admin')),
);
?>

<h1>View Pessoa #<?php echo $model->idPessoa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPessoa',
		'nome',
		'telefone',
		'celular',
		'email',
	),
)); ?>
