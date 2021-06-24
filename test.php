<?php
$gitDir = __DIR__.('/../git/ctxSip/');

$gitFile = $gitDir.'packed-refs';
if (file_exists($gitFile)) {
	echo 'The file ' . $gitFile . ' exists';
} else {
	echo 'The file ' . $gitFile . ' does not exist';
}

?>