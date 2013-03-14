<?php
/* @var $this EditoraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Editoras',
);

$this->menu=array(
	array('label'=>'Cadastrar Editora', 'url'=>array('create')),
	array('label'=>'Gerenciar Editora', 'url'=>array('admin')),
);
?>

<h1>Editoras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
