<?php
$this->breadcrumbs=array(
	'Pessoas',
);

$this->menu=array(
	array('label'=>'Criar Pessoa','url'=>array('create')),
	array('label'=>'Gerenciar Pessoa','url'=>array('admin')),
);
?>

<h1>Pessoas</h1>
<?php

	// $gridColumns
	$gridColumns = array(
		array('name'=>'idPessoa', 'header'=>'ID', 'htmlOptions'=>array('style'=>'width: 60px')),
		array('name'=>'nome', 'header'=>'Nome'),
		array('name'=>'telefone', 'header'=>'Telefone'),
		array('name'=>'celular', 'header'=>'Celular'),
		array('name'=>'email', 'header'=>'e-mail'),
		array(
			'htmlOptions' => array('nowrap'=>'nowrap'),
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonUrl'=>null,
			'updateButtonUrl'=>null,
			'deleteButtonUrl'=>null,
		)
	);
	
	$this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'bordered',
	'dataProvider'=>$dataProvider,
	'template'=>"{items}",
	'columns'=>$gridColumns,
));

?>
