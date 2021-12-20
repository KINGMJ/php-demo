<?php


namespace Services\User;


class UserMapper implements UserMapperInterface
{
	function __get($key) {
		$CI =& get_instance();
		return $CI->$key;
	}

	public function findById($id) {
		log_message("error" , var_export($this , TRUE));
		$this->db->where('id' , $id);
		$query = $this->db->get('user');
		$res = $query->first_row();
		if (empty($res)) {
			return NULL;
		}
		return $this->loadUser($res);
	}

	public function insert(UserInterface $user) {
		// TODO: Implement insert() method.
	}

	public function update(UserInterface $user) {
		// TODO: Implement update() method.
	}

	public function delete($id) {
		// TODO: Implement delete() method.
	}

	private function loadUser(array $row) {
		$user = new User($row["name"] , $row["email"]);
		$user->setId($row["id"]);
		return $user;
	}
}
