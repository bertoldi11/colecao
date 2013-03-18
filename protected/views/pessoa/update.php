<?php
$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	$model->idPessoa=>array('view','id'=>$model->idPessoa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pessoa','url'=>array('index')),
	array('label'=>'Create Pessoa','url'=>array('create')),
	array('label'=>'View Pessoa','url'=>array('view','id'=>$model->idPessoa)),
	array('label'=>'Manage Pessoa','url'=>array('admin')),
);
?>

<h1>Update Pessoa <?php echo $model->idPessoa; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>