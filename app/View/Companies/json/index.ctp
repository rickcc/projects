<?php 
	Configure::write('debug', 0); 
	echo '{"Companies":';
	echo $this->Js->object($companies); 
	echo '}';
?>