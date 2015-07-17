<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>madlib</title>
</head>
<body>
<?php
   $time_start = microtime(true);

   /* Choose a random template */
   $fname = "./word/template";
   file_exists($fname)&&($lines=file($fname))||die("can't open ".$fname);
   $temps = array();
   foreach($lines as $line){
     $temps[] = $line;
   }
   $random = mt_rand(0,count($temps)-1);
   $temp = $temps[$random];
   unset($temps);
   
   $mlib_url = "http://regal-sun-100211.appspot.com/madlib2?pos=";
   $url = $mlib_url.urlencode($temp);
//   $context = stream_context_create(array('http' => array('ignore_errors' => true)));
   $time_startS = microtime(true);
   $response = file_get_contents($url,false);
   if($http_response_header[0] !== 'HTTP/1.1 200 OK'){
      echo $http_response_header[0]."<br />";
    }else{ 
      echo $response;
   }
   $timelimitS = microtime(true) - $time_startS;
   $timelimit = microtime(true) - $time_start;
   echo "<br />".'<FONT COLOR="white">'." madlib2:".$timelimitS.'</FONT>'."<br />";
   echo '<FONT COLOR="white">'." madlib:".$timelimit.'</FONT>';

?>
</body>
</html>
