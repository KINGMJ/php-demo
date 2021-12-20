<?php


namespace Services\User;


use BadMethodCallException;
use InvalidArgumentException;

class User implements UserInterface
{
	private $id;
	private $name;
	private $email;

	public function __construct($name , $email) {
		$this->setName($name);
		$this->setEmail($email);
	}

	public function setId($id) {
		if ($this->id !== NULL) {
			throw new BadMethodCallException("The user ID has been set already.");
		}
		if ( ! is_int($id) || $id < 1) {
			throw new InvalidArgumentException("The user ID is invalid.");
		}
		$this->id = $id;
		return $this;
	}

	public function getId() {
		return $this->id;
	}

	public function setName($name) {
		if (strlen($name) < 2 || strlen($name) > 30) {
			throw new InvalidArgumentException("The user name is invalid.");
		}
		$this->name = $name;
		return $this;
	}

	public function getName() {
		return $this->name;
	}

	public function setEmail($email) {
		if ( ! filter_var($email , FILTER_VALIDATE_EMAIL)) {
			throw new InvalidArgumentException("The user email is invalid.");
		}
		$this->email = $email;
		return $this;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getAvatar($size = 70 , $default = "monsterid") {
		return "http://www.gravatar.com/avatar/" .
			md5(strtolower($this->email)) .
			"?s=" . (integer)$size .
			"&d=" . urlencode($default) .
			"&r=G";
	}
}
