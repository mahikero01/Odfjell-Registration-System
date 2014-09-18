<h2>
	<?php echo h($visitor['Visitor']['firstname']); ?>
	<?php echo h($visitor['Visitor']['surname']); ?>
</h2>
<dl>
<dt><?php echo __('Table'); ?></dt>
<dd>
	<?php echo __($visitor['Visitor']['table']); ?>
</dd>
<dt><?php echo __('Remarks'); ?></dt>
<dd>
	<?php echo __($visitor['Visitor']['remarks']); ?>
</dd>

<?php
echo $this->Form->create('Visitor');
echo $this->Form->input('id',array('type' => 'hidden'));
echo $this->Form->input('in', array('type'=>'checkbox'));
echo $this->Form->end('Save');
?>

