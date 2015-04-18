<?php

use Cake\Core\Configure;
use Cake\Core\Plugin;

/**
 * Dashboard URL
 */
Configure::write('Croogo.dashboardUrl', array(
	'admin' => true,
	'plugin' => 'extensions',
	'controller' => 'extensions_dashboard',
	'action' => 'index',
));

if (!Plugin::loaded('Migrations')) {
	Plugin::load('Migrations', ['autoload' => true, 'classBase' => false]);
}
if (!Plugin::loaded('Croogo/Settings')) {
	Plugin::load('Croogo/Settings', ['bootstrap' => true, 'path' => Plugin::path('Croogo/Croogo') . '..' . DS . 'Settings' . DS]);
}
if (!Plugin::loaded('Search')) {
	Plugin::load('Search', ['autoload' => true, 'classBase' => false]);
}