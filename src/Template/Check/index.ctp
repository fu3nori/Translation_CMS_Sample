<h1>翻訳内容確認画面</h1>

<div id="jp" style="width: 300px;float : left;">
    <p>日本語</p>
<?php
foreach ($jps as $jp){
    print $jp['text'];
    print "<br>";
}
?>
</div>

<div id="en" style="width: 300px; float: left;">
    <p>英語</p>
    <?php
    foreach ($ens as $en){
        print $en['text'];
        print "<br>";
    }
    ?>
</div>


<div id="ch" style="width: 300px; float: left;">
    <p>中国語</p>
    <?php
    foreach ($chs as $ch){
        print $ch['text'];
        print "<br>";
    }
    ?>
</div>

<div id="ch" style="width: 300px; float: left;">
    <p>韓国語</p>
    <?php
    foreach ($krs as $kr){
        print $kr['text'];
        print "<br>";
    }
    ?>
</div>
<div id="ch" style="width: 300px; float: left;">
    <b><a href="trans">入力画面に戻る</a></b>
</div>
