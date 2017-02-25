<?php
	/*
	*	By João Artur	
	*	www.github.com/JoaoArtur
	*	MasterCrypt1 // MC1
	*	Use: php mc1.php VALOR
	*	You can implement this script in other php file using require_once function.
	*	keni = #$9f0a3c013041d306f4fad2e5c1d860882705e463$#
	*/

	function mc1($valor) {
		$prefixo = "#$";
		$sufixo  = "$#";
		$a = md5($valor);
		$a = sha1($valor);
		$a = base64_encode($valor);
		$a = md5($valor);
		$a = md5($valor);
		$a = md5($valor);
		$a = md5($valor);
		$a = md5($valor);
		$a = base64_encode($valor);
		$a = sha1($valor);
		$a = sha1($valor);
		return $prefixo.$a.$sufixo;
	}


	if (isset($argv[1])) {
		echo mc1($argv[1]);
	}
?>