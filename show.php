<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>show</title>
</head>
<body>

<?php
  $url = "http://step15-krispop.appspot.com/peers";
 // $context = stream_context_create(array('http' => array('ignore_errors' => true)));
  $buff = file_get_contents($url);
  $urls = preg_split('/[\s]+/', $buff, -1, PREG_SPLIT_NO_EMPTY);
  $msg = htmlspecialchars($_GET["message"]);

  foreach( $urls as $val ){
	echo "▼".$val."<br />";
   	$url = $val."/convert?message=".$msg;
	 $response = file_get_contents($url);
         if($http_response_header[0] !== 'HTTP/1.1 200 OK'){
         echo "SERVER_ERROR (not connectable)<br />";
            continue;
         }
         echo "-    ".$response."<br />";
  }
?>

</body>
</html>
