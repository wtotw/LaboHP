<h2>研究者追加</h2>

<?php
echo $this->Form->create('User');
echo $this->Form->input('user_name');
echo $this->Form->input('nickname');
echo $this->Form->input('birthday');
echo $this->Form->input('sex');
echo $this->Form->input('mail_address');
echo $this->Form->input('tell_number');
echo $this->Form->end('追加');