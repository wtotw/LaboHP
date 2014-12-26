<h2>研究者一覧</h2>

<ul>
<?php foreach ($users as $user) : ?>
	<li>
	<?php
	// debug($users);
	// echo h($user['User']['user_name']);
	echo $this->Html->link($user['User']['user_name'], '/Users/view/'.$user['User']['id']);
	?>
	</li>
<?php endforeach; ?>
</ul>

<h2>研究者追加</h2>
<?php echo $this->Html->link('研究者を追加する', array('controller'=>'users', 'action'=>'add'));