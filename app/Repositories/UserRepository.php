<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository
{
	 /**
     * @var User
     */
    protected User $user;

    /**
     * User constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get all user.
     *
     * @return User $user
     */
    public function all()
    {
        return $this->user->get();
    }

     /**
     * Get user by id
     *
     * @param $id
     * @return mixed
     */
    public function getById(int $id)
    {
        return $this->user->find($id);
    }

    /**
     * Save User
     *
     * @param $data
     * @return User
     */
     public function save(array $data)
    {
        return User::create($data);
    }

     /**
     * Update User
     *
     * @param $data
     * @return User
     */
    public function update(array $data, int $id)
    {
        $user = $this->user->find($id);
        $user->update($data);
        return $user;
    }

    /**
     * Delete User
     *
     * @param $data
     * @return User
     */
   	 public function delete(int $id)
    {
        $user = $this->user->find($id);
        $user->delete();
        return $user;
    }
}
