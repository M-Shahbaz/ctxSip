<?php
$gitDir = __DIR__.('/../git/ctxSip/');

$gitFile = $gitDir.'packed-refs';
if (file_exists($gitFile)) {
	echo 'The file ' . $gitFile . ' exists.test';
	$file = fopen($gitFile, "r");
	while(!feof($file)) {
	  $line     = fgets($file); 
	  $lineAry = explode(" refs/heads/master", $line);
	  if(isset($lineAry[1]) && strlen($lineAry[0])>=3){
		  var_dump($lineAry[0]);
	  }   
	}
} else {
	echo 'The file ' . $gitFile . ' does not exist';
}

?>