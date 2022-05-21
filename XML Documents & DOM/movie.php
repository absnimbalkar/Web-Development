<?php 

$doc=new DOMDocument("1.0","UTF-8");
$doc->formatoutput=true;

$bk=$doc->createElement("Movie_CdStore");
$doc->appendChild($bk);


$ms=$doc->createElement("Categories");
$ms->setAttribute("type","Action");
$bk->appendChild($ms);


$m=$doc->createElement("Action");
$ms->appendChild($m);


$mname=$doc->createElement("MovieTitle","	Kargil	");
$m->appendChild($mname);

$aname=$doc->createElement("ActorName","	Balguru Swami	");
$m->appendChild($aname);


$yr=$doc->createElement("ReleaseYear","	2006	");
$m->appendChild($yr);


$ms=$doc->createElement("Categories");
$ms->setAttribute("type","Action");
$bk->appendChild($ms);


$m=$doc->createElement("Action");
$ms->appendChild($m);

$mname=$doc->createElement("MovieTitle","	Shershaah	");
$m->appendChild($mname);

$aname=$doc->createElement("ActorName","	Denis Ritchie	");
$m->appendChild($aname);



$yr=$doc->createElement("ReleaseYear","	2021	");
$m->appendChild($yr);


$ms=$doc->createElement("Categories");
$ms->setAttribute("type","Classical");
$bk->appendChild($ms);


$m=$doc->createElement("Classical");
$ms->appendChild($m);


$mname=$doc->createElement("MovieTitle","	Lakshya	");
$m->appendChild($mname);

$aname=$doc->createElement("ActorName","	Denis Ritchie	");
$m->appendChild($aname);



$yr=$doc->createElement("ReleaseYear","	2021	");
$m->appendChild($yr);



$ms=$doc->createElement("Categories");
$ms->setAttribute("type","Horror");
$bk->appendChild($ms);


$m=$doc->createElement("Horror");
$ms->appendChild($m);


$mname=$doc->createElement("MovieTitle","	Bhool Bulaiya	");
$m->appendChild($mname);

$aname=$doc->createElement("ActorName","	Denis Ritchie	");
$m->appendChild($aname);



$yr=$doc->createElement("ReleaseYear","	2021	");
$m->appendChild($yr);


$ms=$doc->createElement("Categories");
$ms->setAttribute("type","Classical");
$bk->appendChild($ms);


$m=$doc->createElement("Classical");
$ms->appendChild($m);


$mname=$doc->createElement("MovieTitle","	3 Idiots	");
$m->appendChild($mname);

$aname=$doc->createElement("ActorName","	Denis Ritchie	");
$m->appendChild($aname);



$yr=$doc->createElement("ReleaseYear","	2021	");
$m->appendChild($yr);

$doc->save("movie.xml");
	echo"File Created";
?>
