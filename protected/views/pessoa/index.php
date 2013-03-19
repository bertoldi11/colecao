<?php
	$this->breadcrumbs=array(
		'Pessoas',
	);
	
	
	// Tabs de navegacao
	$this->widget('bootstrap.widgets.TbTabs', array(
		'type'=>'tabs', // 'tabs' or 'pills'
		'tabs'=>array(
			array('label'=>'Listar', 'url'=>array('index'), 'active'=>true),
			array('label'=>'Criar', 'url'=>array('create')),
			array('label'=>'Gerenciar', 'url'=>array('admin')),
		),
	));

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
	'type'=>'striped bordered ',
	'dataProvider'=>$dataProvider,
	'template'=>"{items}",
	'columns'=>$gridColumns,
));

?>
