<?php
/* @var $this PessoaController */
/* @var $model Pessoa */

$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	$model->idPessoa=>array('view','id'=>$model->idPessoa),
	'Alterar',
);

$this->menu=array(
	array('label'=>'Listar Pessoa', 'url'=>array('index')),
	array('label'=>'Cadastrar Pessoa', 'url'=>array('create')),
	array('label'=>'Ver Pessoa', 'url'=>array('view', 'id'=>$model->idPessoa)),
	array('label'=>'Gerenciar Pessoa', 'url'=>array('admin')),
);
?>

<h1>Alterar Pessoa <?php echo $model->idPessoa; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>