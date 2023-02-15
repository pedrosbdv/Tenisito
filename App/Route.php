<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		// $routes['shop'] = array(
		// 	'route' => '/shop',
		// 	'controller' => 'indexController',
		// 	'action' => 'shop'
		// );

		$routes['login'] = array(
			'route' => '/login',
			'controller' => 'indexController',
			'action' => 'login'
		);

		$this->setRoutes($routes);
	}

}

?>