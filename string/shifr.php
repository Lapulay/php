<?php
    if (isset($_POST['key']) && isset($_POST['text']) && isset($_POST['todo'])) {
        $text = strtoupper($_POST['text']);
        $key = strtoupper(generateKey($text, $_POST['key']));
    
        switch ($_POST['todo']) {
            case 'encrypt':
                echo "Шифр:" . cipherText($text, $key);
                break;
            case 'decrypt':
                echo("Расшифровка: " . originalText($text, $key));
                break;
        }
    }
     
   
     function generateKey ($str,  $key)
    {
        $x = strlen($str);
     
        for ($i = 0; ; $i++)
        {
            if ($x == $i)
                $i = 0;
            if (strlen($key) == strlen($str))
                break;
            $key+=$key[$i];
        }
        return $key;
    }
     
    
     function cipherText( $str,  $key)
    {
         $cipher_text="";
     
            for ( $i = 0; $i < strlen($str); $i++)
        {
            
             $x = (ord($str[$i]) + ord($key[$i])) %26;
     
           
            $x += ord('A');
     
            $cipher_text .= chr($x);
        }
        return $cipher_text;
    }
     
    
     function originalText( $cipher_text,  $key)
    {
        $orig_text = "" ;
     
        for ( $i = 0 ; $i < strlen($cipher_text); $i++)
        {
           
             $x = (ord($cipher_text[$i]) - ord($key[$i]) + 26) %26;
     
           
            $x += ord('A');
            $orig_text.= chr($x);
        }
        return $orig_text;
    }

  
  
?>