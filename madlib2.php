<html>
<head>
<title>madlib2</title>
</head>
<body>
<? 

 $word_url = "http://regal-sun-100211.appspot.com/getword?pos=";
 $context = stream_context_create(array('http' => array('ignore_errors' => true)));
 function take_word($speech){
         global $word_url;
         global $context;
  	 $url = $word_url.$speech;
	 $response = file_get_contents($url, false,$context);
         if(strcmp($http_response_header[0],'HTTP/1.1 200 OK')){
            echo "SERVER_ERROR (not connectable)<br />";
	    return "";
         }else{
            return $response;
	 }
 }
 $msg = htmlspecialchars($_GET["pos"]);
 /* Divided into word */
 $out2 = explode(' ',$msg);

 foreach( $out2 as $val){
        /* If the word has [ at the beginning and it ends with ] */
	if(preg_match('/\[(.+)\]([\S]*)/',$val,$match)){
		echo take_word($match[1]); 
                /* output the characters behind ']'  (example: [noun]!) */
		if(!(empty($match[2]))) echo $match[2]; 
		echo " ";
		continue;
	}
        echo $val." ";
 }

?>
</body>
</html>


