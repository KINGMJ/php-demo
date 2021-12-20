<?php


namespace Services\User;


class UserMapper implements UserMapperInterface
{
	function __get($key) {
		$CI =& get_instance();
		return $CI->$key;
	}

	public function findById($id) {
		$this->db->where('id' , $id);
		$query = $this->db->get('user');
		$res = $query->first_row();
		if (empty($res)) {
			return NULL;
		}
		return $this->loadUser($res);
	}

	public function insert(UserInterface $user) {
		$this->db->insert('user' , array(
			'name' => $user->getName() ,
			'email' => $user->getEmail()
		));
	}

	public function update(UserInterface $user) {
		$this->db->where('id' , $user->getId());
		$this->db->limit(1);
		$this->db->update('user' , array(
			'name' => $user->getName() ,
			'email' => $user->getEmail()
		));
	}

	public function delete($id) {
		if ($id instanceof UserInterface) {
			$id = $id->getId();
		}
		$this->db->where('id' , $id);
		$this->db->delete('user');
	}

	private function loadUser($row) {
		$user = new User($row->name , $row->email);
		$user->setId((int)$row->id);
		return $user;
	}
}
