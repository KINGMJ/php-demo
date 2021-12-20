<?php

namespace Services\User;

interface UserMapperInterface
{
	public function findById($id);

	public function insert(UserInterface $user);

	public function update(UserInterface $user);

	public function delete($id);
}
