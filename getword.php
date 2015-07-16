<html>
<head>
<title>getword</title>
</head>
<body>

<?
  $msg = htmlspecialchars($_GET["pos"]);
  $parts_of_speech = array("adjective","adverb","conjunction","exclamation","name","noun","preposition","pronoun","verb");
  $length = count($parts_of_speech);

  if(!(in_array($msg,$parts_of_speech))){
   $i = mt_rand(0,$length-1);
   $msg = $parts_of_speech[$i];
  }
  $fname = "./word/".$msg;

  file_exists($fname)&&($lines=file($fname))||die("can't open ".$fname);
  $words=array();
  foreach($lines as $line){
   $words[] = $line;
  }
  $random = mt_rand(0,count($words)-1);
  echo $words[$random];
?>
</body>
</html>
