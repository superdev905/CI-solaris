<?php

/**
 * Created by PhpStorm.
 * User: Minona
 * Date: 10/01/2017
 * Time: 19:48
 */
class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get one or many user accounts
     *
     * @param integer|null $user_id
     * @return array
     */
    public function get($user_id = null)
    {
        if ($user_id == null) {
            // fetch all
            $query = $this->db->get('user');
        } else {
            // fetch just one
            $query = $this->db->get_where('user', ['id' => $user_id]);
        }
        return $query->result();
    }

    /**
     * @param string $email
     * @param string $password
     * @return array
     */
    public function login($email, $password)
    {
        $query = $this->db->get_where('user', [
            'email' => $email,
            'password' => sha1($password . HASH_KEY)
        ]);
        return $query->result();

    }

    /**
     * @param $email
     * @param $password
     * Create User Account
     */
    public function create_user($email, $password)
    {
        /*Insert in table 'user' following array*/
        $this->db->insert('user', [
            'email' => $email,
            'password' => sha1($password . HASH_KEY)
        ]);
    }

    public function delete_user($user_id)
    {
        $this->db->where(['id' => $user_id]);
        $this->db->delete('user');
    }

    public function update_user($user_id, $new_email)
    {
        $data = array(
            'id' => $user_id,
            'email' => $new_email
        );

        $this->db->where('id', $user_id);
        $this->db->update('user', $data);

    }

    public function change_user_password($user_id, $new_password)
    {
        $data = array(
            'id' => $user_id,
            'password' => $new_password
        );

        $this->db->where('id', $user_id);
        $this->db->update('user', $data);

    }
}