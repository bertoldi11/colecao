<?php
$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pessoa','url'=>array('index')),
	array('label'=>'Manage Pessoa','url'=>array('admin')),
);
?>

<h1>Create Pessoa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>