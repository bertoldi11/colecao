<?php
/* @var $this LivroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Livros',
);

$this->menu=array(
	array('label'=>'Cadastrar Livro', 'url'=>array('create')),
	array('label'=>'Gerenciar Livro', 'url'=>array('admin')),
);
?>

<h1>Livros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
