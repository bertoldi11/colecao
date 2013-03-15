<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('idLivro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idLivro), array('livro/view', 'id'=>$data->idLivro)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?> (<?php echo CHtml::encode($data->subtitulo); ?> )
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Emprestado')); ?>:</b>
	<?php if($data->movimentacaos[0]->devolvido == 'S'):?>
		Não
	<?php else:?>
		<?php echo CHtml::link('Sim', array('movimentacao/view', 'id'=>$data->movimentacaos[0]->idMovimentacao)); ?>
	<?php endif;?>	
</div>