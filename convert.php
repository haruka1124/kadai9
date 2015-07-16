
<?
  $msg = htmlspecialchars($_GET["message"]);

  $key = rand(0,56);
  for($i = 0; $i < strlen($msg); $i++) {
    $tmp =( (ord($msg[$i])+$key ) % 57 )+ 65;
    echo chr($tmp);
  }

?>



