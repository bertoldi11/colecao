<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('idMovimentacao')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idMovimentacao), array('movimentacao/view', 'id'=>$data->idMovimentacao)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('livro')); ?>:</b>
	<?php echo CHtml::encode($data->idLivro0->titulo); ?> (<?php echo CHtml::encode($data->idLivro0->subtitulo); ?> )
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Pessoa')); ?>:</b>
	<?php echo CHtml::encode($data->idPessoa0->nome); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Devolvido')); ?>:</b>
	<?php if($data->devolvido == 'S'):?>
		Sim
		<br>
		<b><?php echo CHtml::encode($data->getAttributeLabel('Observação')); ?>:</b>
		<?php echo CHtml::encode($data->observacao); ?>
		<br />
	<?php else:?>
		<?php echo CHtml::link('Não', array('movimentacao/view', 'id'=>$data->idMovimentacao)); ?>
	<?php endif;?>	
</div>