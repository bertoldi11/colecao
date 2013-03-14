<?php
/* @var $this MovimentacaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movimentações',
);

$this->menu=array(
	array('label'=>'Emprestar Livro', 'url'=>array('create')),
	array('label'=>'Histórico', 'url'=>array('historico')),
);
?>

<h1>Movimentações</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
