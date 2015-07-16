<html>
<head>
  <title>haruka no Page</title>
  <link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />
  <script type="text/javascript">
    <!--
	function addTF(str)　
	{
	document.madlib2.pos.value += str;
	}
	// --></script>
</head>

  <body>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
       echo "Hello <(_ _)>";
       ?>
    <br>
    <h3>Click↓</h3> 
    <ol>
      <li>
	<a href="convert?message=ThePenIsMightierThanTheSword">/convert?message=ThePenIsMightierThanTheSword</a></li>
      <form action="convert" method="get">
	<input type="text" name="message">
	<input type="submit" value="convert">
      </form>
      <li>
	<a href="show?message=KuririnNoKotoka">/show?message=KuririnNoKotoka</a></li>
      <form action="show" method="get">
	<input type="text" name="message">
	<input type="submit" value="show">
      </form>
      <li>
	<a href="getword?pos=adjective">/getword?pos=adjective</a></li>
      <form action="getword" method="get">
	<select name="pos">
	  <option value="adjective">adjective</option>
	  <option value="adverb">adverb</option>
	  <option value="conjunction">conjunction</option>
	  <option value="exclamation">exclamation</option>
	  <option value="name">name</option>
	  <option value="noun">noun</option>
	  <option value="preposition">preposition</option>
	  <option value="pronoun">pronoun</option>
	  <option value="verb">verb</option>
	</select>
	<input type="submit" value="getword">
      </form>
	<li>
	<a href="madlib">/madlib</a></li>
      <li>
	<a href="madlib2?pos=You must save the [noun]. [exclamation]! I am [adjective]!">/madlib2?pos=You must save the [noun]. [exclamation]! I am [adjective]!</a></li>
      <form name="madlib2" action="madlib2" method="get">
	<textarea name="pos" cols="30" rows="5"></textarea>
	<input type="submit" value="Go Mad→" style="color: black;background-color:#00ccff;border-color:#0000ff;"><br>
	<input type="button" value=" [adjective] " onClick="addTF(this.value)">
	<input type="button" value=" [adverb] " onClick="addTF(this.value)">
	<input type="button" value=" [conjunction] " onClick="addTF(this.value)">
	<input type="button" value=" [exclamation] " onClick="addTF(this.value)"><br>
	<input type="button" value=" [name] " onClick="addTF(this.value)">
	<input type="button" value=" [noun] " onClick="addTF(this.value)">
	<input type="button" value=" [preposition] " onClick="addTF(this.value)">
	<input type="button" value=" [pronoun] " onClick="addTF(this.value)">
	<input type="button" value=" [verb] " onClick="addTF(this.value)"><br>
      </form>
    </ol>

  </body>
</html>
