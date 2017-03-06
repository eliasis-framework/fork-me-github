<?php
/**
 * Eliasis PHP Framework application module
 *
 * @author     Josantonius - hola@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Eliasis-Framework/Modules
 * @since      1.0.0
 */

use Eliasis\App\App;

$controller = App::namespace('modules') . 'ForkMeGitHub' .BS. 'Controller' . BS;

return [

    'hooks' => [
		
		'css' => $controller . 'ForkMeGitHub' . '@css',
		'top' => $controller . 'ForkMeGitHub' . '@top',
    ],
];
