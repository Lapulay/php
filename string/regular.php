<?php
if (isset($_POST['text']) && isset($_POST['slovo'])) {
	$str = $_POST['text'];
	$word = $_POST['slovo'];
    $stily = '<span style ="color: red">$0</span>';
 
    $itog = preg_quote($word, '~');
    echo preg_replace("~$itog~", $stily, $str );
}
  
?>