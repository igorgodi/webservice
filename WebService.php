<?php

namespace ServeurSoap;

// Webservice lui-même
class WebService
{
	// TODO : ne pas oublier les annotations

	/**
	 * Test de passage de variable
	 *
	 * @param int $i valeur
	 * @return int
	 */
	public function test($i)
	{
		return $i;
	}

	/**
	 * Méthode hello
	 *
	 * @return string
	 */
	public function hello()
	{
		return "hello world";
	}
}

?>
