<div>
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
				'viewButtonUrl'=>'Yii::app()->createUrl("pessoa/view", array("id"=>"$data->idPessoa"))',
				'updateButtonUrl'=>'Yii::app()->createUrl("pessoa/update", array("id"=>"$data->idPessoa"))',
				'deleteButtonUrl'=>'Yii::app()->createUrl("pessoa/delete", array("id"=>"$data->idPessoa"))',
			)
		);
		
		$this->widget('bootstrap.widgets.TbGridView', array(
			'type'=>'striped bordered ',
			'dataProvider'=>$dataProvider,
			'template'=>"{items}",
			'columns'=>$gridColumns,
		));
	?>
</div>