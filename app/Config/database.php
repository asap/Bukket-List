<?php
/**
 * This is core configuration file.
 *
 * Use it to configure core behaviour of Cake.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * In this file you set up your database connection details.
 *
 * @package       cake.config
 */
/**
 * Database configuration class.
 * You can specify multiple configurations for production, development and testing.
 *
 * datasource => The name of a supported datasource; valid options are as follows:
 *		Database/Mysql 		- MySQL 4 & 5,
 *		Database/Sqlite		- SQLite (PHP5 only),
 *		Database/Postgres	- PostgreSQL 7 and higher,
 *		Database/Sqlserver	- Microsoft SQL Server 2005 and higher
 *
 * You can add custom database datasources (or override existing datasources) by adding the
 * appropriate file to app/Model/Datasource/Database.  Datasources should be named 'MyDatasource.php',
 *
 *
 * persistent => true / false
 * Determines whether or not the database should use a persistent connection
 *
 * host =>
 * the host you connect to the database. To add a socket or port number, use 'port' => #
 *
 * prefix =>
 * Uses the given prefix for all the tables in this database.  This setting can be overridden
 * on a per-table basis with the Model::$tablePrefix property.
 *
 * schema =>
 * For Postgres specifies which schema you would like to use the tables in. Postgres defaults to 'public'.
 *
 * encoding =>
 * For MySQL, Postgres specifies the character encoding to use when connecting to the
 * database. Uses database default not specified.
 *
 * unix_socket =>
 * For MySQL to connect via socket specify the `unix_socket` parameter instead of `host` and `port`
 */
class DATABASE_CONFIG {

	// @TODO: Set up all the environments
	public $production = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' 	     => 'tunnel.pagodabox.com',
		'login'      => 'sumiko',
		'password'   => 'D09A6zew',
		'database'   => 'bukket_list',
		'prefix'     => ''
	);

	public $uat = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' 	     => 'tunnel.pagodabox.com',
		'login'      => 'merideth',
		'password'   => 'STyCI1HO',
		'database'   => 'aleida',
		'prefix'     => ''
	);

	public function __construct()
	{
		$env = getenv('CAKE_ENV');
		
		if ($env == 'local'&& file_exists(dirname(__FILE__) . '/database-local.php')) {
			$this->default = include_once('database-local.php');
		}
		
		else if (isset($this->$env)){
			$this->default = $this->$env;
		}
		else {
			$this->default = $this->production;
		}
	}
}
