<?php
/* @var $this MovimentacaoController */
/* @var $model Movimentacao */

$this->breadcrumbs=array(
	'Movimentações'=>array('index'),
	$model->idMovimentacao,
);

$this->menu=array(
	array('label'=>'Listar Movimentação', 'url'=>array('index')),
	array('label'=>'Cadastrar Movimentação', 'url'=>array('create')),
	array('label'=>'Alterar Movimentação', 'url'=>array('update', 'id'=>$model->idMovimentacao)),
	array('label'=>'Apagar Movimentação', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idMovimentacao),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar Movimentação', 'url'=>array('admin')),
);
?>

<h1>View Movimentacao #<?php echo $model->idMovimentacao; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idMovimentacao',
		'idLivro0.titulo',
		'idPessoa0.nome',
		'dtEmprestimo',
		'dtDevolucao',
		'devolvido',
	),
)); ?>
