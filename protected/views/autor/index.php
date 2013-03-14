<?php
/* @var $this AutorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Autores',
);

$this->menu=array(
	array('label'=>'Cadastrar Autor', 'url'=>array('create')),
	array('label'=>'Gerenciar Autor', 'url'=>array('admin')),
);
?>

<h1>Autores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
