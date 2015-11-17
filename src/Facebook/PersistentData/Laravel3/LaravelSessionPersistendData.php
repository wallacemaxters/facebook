<?php

namespace WallaceMaxters\Facebook\Laravel3\PersistentData;

use Facebook\PersistentData\PersistentDataInterface;
use Laravel\Session;

/**
 * @author Wallace de Souza Vizerra
 * 
 * This class is a implementetion of PersistentData for Facebook SDK 5
 * */

class LaravelSessionPersistentData implements PersistentDataInterface
{
	/**
	 * Namespace used in Laravel 3 session
	 * @var string
	 * */
	protected $namespace = 'facebook';
	
	/**
	 * {@inheritdoc}
	 * */
	public function set($name, $value)
	{
		Session::put($this->namespace, [$name => $value]);
	}

	/**
	 * {@inheritdoc}
	 * */

	public function get($name)
	{
		return Session::get($this->namespace . '.' . $name);
	}

	/**
	 * Define the "namespace" from session
	 * */
	public function setSessionNamespace($namespace)
	{	
		// Clear data for old session namespace

		Session::forget($this->namespace);

		$this->namespace = $namespace;

		return $this;
	}
}
