<?php
/* @var $this PessoaController */
/* @var $model Pessoa */

$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Pessoa', 'url'=>array('index')),
	array('label'=>'Gerenciar Pessoa', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Pessoa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>