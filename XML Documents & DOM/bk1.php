<?php

$xml=simplexml_load_file("bk.xml");
var_dump($xml);

foreach($xml->Book as $bk)
{

echo"<br>Book No= $bk->bookno <br>";

echo"Book Name= $bk->bookname <br>";
echo"Author Name= $bk->AuthorName <br>";


}
?>
