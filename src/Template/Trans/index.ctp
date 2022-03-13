<h1>変換フォーム</h1>
<?php
echo $this->Form->create('trans', ['url' => ['action' => 'index', 'type' => 'post']]);
?>
<h3>テキスト入力</h3>
<?php

echo $this->Form->textarea('text',array('cols'=>4,'rows'=>10, 'style' => 'width:640px'));
?>
<br>
<?php
echo $this->Form->submit('送信');
echo $this->Form-> end();
?>
<br>
<p>
    <?php echo $work ?>
</p>
<b><a href="check">翻訳内容を確認する</a></b>
